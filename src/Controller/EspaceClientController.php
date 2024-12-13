<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Vehicle;
use App\Entity\Appointment;
use App\Form\UserProfileFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class EspaceClientController extends AbstractController
{
    #[Route('/espace-client', name: 'espace_client')]
    public function index(
        Request $request,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher
    ): Response {
        // Vérifiez si l'utilisateur est connecté
        if (!$this->getUser()) {
            $this->addFlash('error', 'Veuillez vous connecter pour accéder à votre espace client.');
            return $this->redirectToRoute('app_login');
        }

        $user = $this->getUser();
        $vehicules = $entityManager->getRepository(Vehicle::class)->findBy(['proprietaire' => $user]);
        $rendezVous = $entityManager->getRepository(Appointment::class)->findBy(['client' => $user]);

        $form = $this->createForm(UserProfileFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $plainPassword = $form->get('plainPassword')->getData();

            if ($plainPassword) {
                $encodedPassword = $passwordHasher->hashPassword($user, $plainPassword);
                $user->setPassword($encodedPassword);
            }

            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'Profil mis à jour avec succès.');

            return $this->redirectToRoute('espace_client');
        }

        return $this->render('espace_client/index.html.twig', [
            'user' => $user,
            'vehicules' => $vehicules,
            'rendezVous' => $rendezVous,
            'form' => $form->createView(),
        ]);
    }

}
