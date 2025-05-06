<?php

namespace App\Controller;
use App\Entity\Appointment;

use App\Entity\Marque;
use App\Entity\Modele;
use App\Entity\Motorisation;
use App\Entity\User;
use App\Form\MarqueType;
use App\Form\ModeleType;
use App\Form\MotorisationType;
use App\Form\RegistrationFormType;
use App\Repository\AppointmentRepository;
use App\Repository\MarqueRepository;
use App\Repository\ModeleRepository;

use App\Repository\MotorisationRepository;
use App\Repository\OrderRepository;
use App\Repository\ProductRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/admin')]
class AdminDashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_admin_dashboard')]
    public function index(
        UserRepository $userRepository,
        ProductRepository $productRepository,
        AppointmentRepository $appointmentRepository
    ): Response {
        // Récupérer le nombre de clients (ROLE_USER uniquement, pas ROLE_ADMIN)
        $clientsCount = $userRepository->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->where('u.roles LIKE :role_user')
            ->andWhere('u.roles NOT LIKE :role_admin')
            ->setParameter('role_user', '%"ROLE_USER"%')
            ->setParameter('role_admin', '%"ROLE_ADMIN"%')
            ->getQuery()
            ->getSingleScalarResult();

        // Récupérer le nombre d'administrateurs (ROLE_ADMIN)
        $adminsCount = $userRepository->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->where('u.roles LIKE :role_admin')
            ->setParameter('role_admin', '%"ROLE_ADMIN"%')
            ->getQuery()
            ->getSingleScalarResult();

        // Récupérer le nombre de produits
        $productsCount = $productRepository->count([]);

        // Récupérer le nombre de rendez-vous
        $appointmentsCount = $appointmentRepository->count([]);

        return $this->render('admin_dashboard/dashboard.html.twig', [
            'usersCount' => $clientsCount, // Alias pour clientsCount
            'clientsCount' => $clientsCount,
            'adminsCount' => $adminsCount,
            'productsCount' => $productsCount,
            'appointmentsCount' => $appointmentsCount,
        ]);
    }


    #[Route('/register-admin', name: 'app_register_admin')]
    public function registerAdmin(
        Request $request,
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $entityManager
    ): Response {
        // Vérifie si l'utilisateur a le rôle ADMIN
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Hacher le mot de passe
            $hashedPassword = $passwordHasher->hashPassword(
                $user,
                $form->get('plainPassword')->getData()
            );
            $user->setPassword($hashedPassword);

            // Définir le rôle ADMIN
            $user->setRoles(['ROLE_ADMIN']);

            $entityManager->persist($user);
            $entityManager->flush();

            // Redirection après inscription
            $this->addFlash('success', 'Administrateur créé avec succès.');

            return $this->redirectToRoute('app_admin_dashboard');
        }

        return $this->render('admin_dashboard/register_admin.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
    // Liste des rendez-vous
    #[Route('/rendezvous', name: 'admin_rendezvous')]
    public function manageRendezvous(EntityManagerInterface $entityManager ,Request $request, PaginatorInterface $paginator): Response
    {
        // Récupérer tous les rendez-vous
        $rendezVous = $entityManager->getRepository(Appointment::class)->findAll();
        $rendezVous = $paginator->paginate(
            $rendezVous , /* Query ou tableau */
            $request->query->getInt('page', 1), /* Numéro de page */
            16 /* Limite par page */
        );

        return $this->render('admin_dashboard/rendezvous/index.html.twig', [
            'rendezVous' => $rendezVous,
        ]);

    }

    // Validation d'un rendez-vous
    #[Route('/rendezvous/{id}/validate', name: 'admin_rendezvous_validate')]
    public function validateRendezvous(Appointment $rendezvous, EntityManagerInterface $entityManager): Response
    {
        $rendezvous->setStatut('validé');
        $entityManager->flush();

        $this->addFlash('success', 'Le rendez-vous a été validé.');
        return $this->redirectToRoute('admin_rendezvous');
    }

    // Annulation d'un rendez-vous
    #[Route('/rendezvous/{id}/cancel', name: 'admin_rendezvous_cancel')]
    public function cancelRendezvous(Appointment $rendezvous, EntityManagerInterface $entityManager): Response
    {
        $rendezvous->setStatut('annulé');
        $entityManager->flush();

        $this->addFlash('success', 'Le rendez-vous a été annulé.');
        return $this->redirectToRoute('admin_rendezvous');
    }
    #[Route('/vehicules', name: 'admin_vehicules')]
    public function manageVehicles(
        Request $request,
        EntityManagerInterface $entityManager,
        MarqueRepository $marqueRepository,
        ModeleRepository $modeleRepository,
        MotorisationRepository $motorisationRepository
    ): Response {
        // Récupérer toutes les marques
        $marques = $marqueRepository->findAll();

        // Formulaire pour ajouter une nouvelle marque
        $newMarque = new Marque();
        $marqueForm = $this->createForm(MarqueType::class, $newMarque);
        $marqueForm->handleRequest($request);

        if ($marqueForm->isSubmitted() && $marqueForm->isValid()) {
            $entityManager->persist($newMarque);
            $entityManager->flush();

            $this->addFlash('success', 'Nouvelle marque ajoutée avec succès.');
            return $this->redirectToRoute('admin_vehicules');
        }

        // Formulaire pour ajouter un modèle
        $newModele = new Modele();
        $modeleForm = $this->createForm(ModeleType::class, $newModele);
        $modeleForm->handleRequest($request);

        if ($modeleForm->isSubmitted() && $modeleForm->isValid()) {
            $entityManager->persist($newModele);
            $entityManager->flush();

            $this->addFlash('success', 'Nouveau modèle ajouté avec succès.');
            return $this->redirectToRoute('admin_vehicules');
        }



        return $this->render('admin_dashboard/vehicules/index.html.twig', [
            'marques' => $marques,
            'marqueForm' => $marqueForm->createView(),
            'modeleForm' => $modeleForm->createView(),
            'modeles' => $modeleRepository->findAll(),
            'motorisations' => $motorisationRepository->findAll(),

        ]);
    }

    #[Route('/orders', name: 'admin_orders', methods: ['GET', 'POST'])]
    public function manageOrders(
        OrderRepository $orderRepository,
        Request $request,
        EntityManagerInterface $entityManager,
        PaginatorInterface $paginator
    ): Response {
        // Utiliser QueryBuilder pour récupérer les commandes
        $queryBuilder = $orderRepository->createQueryBuilder('o')->orderBy('o.dateCommande', 'DESC');

        // Paginer les commandes avec QueryBuilder
        $pagination = $paginator->paginate(
            $queryBuilder, // Requête paginée
            $request->query->getInt('page', 1), // Page actuelle (par défaut 1)
            10 // Nombre de commandes par page
        );

        // Gestion des actions POST pour accepter/refuser une commande
        if ($request->isMethod('POST')) {
            $orderId = $request->request->get('order_id');
            $action = $request->request->get('action');
            $order = $orderRepository->find($orderId);

            if ($order) {
                $order->setStatut($action === 'accept' ? 'Acceptée' : 'Refusée');
                $entityManager->flush();
                $this->addFlash('success', 'Statut de la commande mis à jour.');
            } else {
                $this->addFlash('error', 'Commande introuvable.');
            }

            return $this->redirectToRoute('admin_orders');
        }

        return $this->render('admin_dashboard/orders/orders.html.twig', [
            'pagination' => $pagination,
        ]);
    }



}
