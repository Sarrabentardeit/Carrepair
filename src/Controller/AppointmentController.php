<?php

namespace App\Controller;

use App\Entity\Appointment;
use App\Form\AppointmentType;
use App\Repository\AppointmentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/appointment')]
class AppointmentController extends AbstractController
{
    #[Route(name: 'app_appointment_index', methods: ['GET'])]
    public function index(AppointmentRepository $appointmentRepository): Response
    {
        $appointments = $appointmentRepository->findBy(['client' => $this->getUser()]);

        return $this->render('appointment/index.html.twig', [
            'appointments' => $appointments,
        ]);
    }

    #[Route('/new', name: 'app_appointment_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $appointment = new Appointment();
        $form = $this->createForm(AppointmentType::class, $appointment, [
            'user' => $this->getUser(), // Passe l'utilisateur connecté
        ]);
        $form->handleRequest($request);

        $success = false; // Variable pour contrôler le message de confirmation

        if ($form->isSubmitted() && $form->isValid()) {
            $appointment->setClient($this->getUser());
            $appointment->setStatut('En attente');

            $entityManager->persist($appointment);
            $entityManager->flush();

            $success = true; // Le rendez-vous a été enregistré
        }

        return $this->render('appointment/new.html.twig', [
            'form' => $form->createView(),
            'success' => $success, // Transmet le statut à la vue
        ]);
    }




    #[Route('/{id}', name: 'app_appointment_show', methods: ['GET'])]
    public function show(Appointment $appointment): Response
    {
        if ($appointment->getClient() !== $this->getUser()) {
            throw $this->createAccessDeniedException("Accès interdit.");
        }

        return $this->render('appointment/show.html.twig', [
            'appointment' => $appointment,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_appointment_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Appointment $appointment, EntityManagerInterface $entityManager): Response
    {
        // Vérification de l'accès
        if ($appointment->getClient() !== $this->getUser()) {
            throw $this->createAccessDeniedException("Modification interdite.");
        }

        // Créez le formulaire en passant l'utilisateur connecté comme option
        $form = $this->createForm(AppointmentType::class, $appointment, [
            'user' => $this->getUser(),
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Rendez-vous modifié avec succès.');
            return $this->redirectToRoute('app_appointment_index');
        }

        return $this->render('appointment/edit.html.twig', [
            'form' => $form->createView(),
            'appointment' => $appointment,
        ]);
    }


    #[Route('/{id}', name: 'app_appointment_delete', methods: ['POST'])]
    public function delete(Request $request, Appointment $appointment, EntityManagerInterface $entityManager): Response
    {
        if ($appointment->getClient() !== $this->getUser()) {
            throw $this->createAccessDeniedException("Suppression interdite.");
        }

        if ($this->isCsrfTokenValid('delete' . $appointment->getId(), $request->request->get('_token'))) {
            $entityManager->remove($appointment);
            $entityManager->flush();

            $this->addFlash('success', 'Rendez-vous supprimé.');
        }

        return $this->redirectToRoute('app_appointment_index');
    }
}
