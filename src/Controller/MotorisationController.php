<?php

namespace App\Controller;

use App\Entity\Motorisation;
use App\Form\MotorisationType;
use App\Repository\MotorisationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/motorisation')]
final class MotorisationController extends AbstractController
{
    #[Route(name: 'app_motorisation_index', methods: ['GET'])]
    public function index(MotorisationRepository $motorisationRepository): Response
    {
        return $this->render('motorisation/index.html.twig', [
            'motorisations' => $motorisationRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_motorisation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $motorisation = new Motorisation();
        $form = $this->createForm(MotorisationType::class, $motorisation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($motorisation);
            $entityManager->flush();

            return $this->redirectToRoute('app_motorisation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('motorisation/new.html.twig', [
            'motorisation' => $motorisation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_motorisation_show', methods: ['GET'])]
    public function show(Motorisation $motorisation): Response
    {
        return $this->render('motorisation/show.html.twig', [
            'motorisation' => $motorisation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_motorisation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Motorisation $motorisation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MotorisationType::class, $motorisation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_motorisation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('motorisation/edit.html.twig', [
            'motorisation' => $motorisation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_motorisation_delete', methods: ['POST'])]
    public function delete(Request $request, Motorisation $motorisation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$motorisation->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($motorisation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_motorisation_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/api/motorisations', name: 'get_motorisations', methods: ['GET'])]
    public function getMotorisations(Request $request, MotorisationRepository $motorisationRepository): JsonResponse
    {
        $modeleId = $request->query->get('modele');
        $motorisations = $motorisationRepository->createQueryBuilder('m')
            ->join('m.modeles', 'mod')
            ->where('mod.id = :modele')
            ->setParameter('modele', $modeleId)
            ->getQuery()
            ->getResult();

        return new JsonResponse(array_map(fn($motorisation) => [
            'id' => $motorisation->getId(),
            'nom' => $motorisation->getNom(),
        ], $motorisations));
    }

}
