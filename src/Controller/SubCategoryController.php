<?php

namespace App\Controller;

use App\Entity\SubCategory;
use App\Form\SubCategoryType;
use App\Repository\SubCategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/subcategory')]
class SubCategoryController extends AbstractController
{
    #[Route('/', name: 'subcategory_index', methods: ['GET'])]
    public function index(SubCategoryRepository $subCategoryRepository): Response
    {
        return $this->render('subcategory/index.html.twig', [
            'subcategories' => $subCategoryRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'subcategory_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $subCategory = new SubCategory();
        $form = $this->createForm(SubCategoryType::class, $subCategory);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($subCategory);
            $entityManager->flush();

            $this->addFlash('success', 'Sous-catégorie créée avec succès.');

            return $this->redirectToRoute('subcategory_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('subcategory/new.html.twig', [
            'subCategory' => $subCategory,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'subcategory_show', methods: ['GET'])]
    public function show(SubCategory $subCategory): Response
    {
        return $this->render('subcategory/show.html.twig', [
            'subCategory' => $subCategory,
            'products' => $subCategory->getProducts(),
        ]);
    }

    #[Route('/{id}/edit', name: 'subcategory_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, SubCategory $subCategory, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(SubCategoryType::class, $subCategory);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Sous-catégorie modifiée avec succès.');

            return $this->redirectToRoute('subcategory_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('subcategory/edit.html.twig', [
            'subCategory' => $subCategory,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'subcategory_delete', methods: ['POST'])]
    public function delete(Request $request, SubCategory $subCategory, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $subCategory->getId(), $request->request->get('_token'))) {
            $entityManager->remove($subCategory);
            $entityManager->flush();

            $this->addFlash('success', 'Sous-catégorie supprimée avec succès.');
        }

        return $this->redirectToRoute('subcategory_index', [], Response::HTTP_SEE_OTHER);
    }
}
