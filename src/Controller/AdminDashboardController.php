<?php

namespace App\Controller;
use App\Entity\Appointment;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Repository\AppointmentRepository;
use App\Repository\ProductRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class AdminDashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_admin_dashboard')]
    public function index(
        UserRepository $userRepository,
        ProductRepository $productRepository,
        AppointmentRepository $appointmentRepository
    ): Response {
        // Récupérer le nombre d'utilisateurs
        $usersCount = $userRepository->count([]);

        // Récupérer le nombre de produits
        $productsCount = $productRepository->count([]);

        // Récupérer le nombre de rendez-vous
        $appointmentsCount = $appointmentRepository->count([]);

        // Récupérer le nombre d'administrateurs (en supposant qu'ils ont un rôle 'ROLE_ADMIN')
        $adminsCount = $userRepository->count(['roles' => 'ROLE_ADMIN']);

        return $this->render('admin_dashboard/dashboard.html.twig', [
            'usersCount' => $usersCount,
            'productsCount' => $productsCount,
            'appointmentsCount' => $appointmentsCount,
            'adminsCount' => $adminsCount,
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
    public function manageRendezvous(EntityManagerInterface $entityManager): Response
    {
        // Récupérer tous les rendez-vous
        $rendezVous = $entityManager->getRepository(Appointment::class)->findAll();

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
}
