<?php

namespace App\Controller;
use Knp\Component\Pager\PaginatorInterface;

use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\MarqueRepository;
use App\Repository\ModeleRepository;
use App\Repository\MotorisationRepository;
use App\Repository\ProductRepository;
use App\Repository\SubCategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\CategoryRepository;

#[Route('/product')]
final class ProductController extends AbstractController
{
    #[Route(name: 'app_product_index', methods: ['GET'])]
    public function index(ProductRepository $productRepository, PaginatorInterface $paginator, Request $request): Response
    {
        // Récupérer tous les produits avec QueryBuilder
        $queryBuilder = $productRepository->createQueryBuilder('p')->orderBy('p.dateAjout', 'DESC');

        // Paginer les résultats
        $pagination = $paginator->paginate(
            $queryBuilder, // QueryBuilder
            $request->query->getInt('page', 1), // Page actuelle (par défaut 1)
            7 // Nombre de produits par page
        );

        return $this->render('product/index.html.twig', [
            'pagination' => $pagination, // Transmettre la pagination au template
        ]);
    }


    #[Route('/new', name: 'app_product_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $product = new Product();

        // Créer le formulaire pour le produit
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        // Si le formulaire est soumis et valide
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                // Gérer l'image du produit (si présente)
                $imageFile = $form->get('image')->getData();
                if ($imageFile) {
                    $newFilename = uniqid() . '.' . $imageFile->guessExtension();

                    try {
                        $imageFile->move(
                            $this->getParameter('uploads_directory'),
                            $newFilename
                        );
                        $product->setImage($newFilename);
                    } catch (\Exception $e) {
                        $this->addFlash('error', 'Erreur lors du téléchargement de l\'image.');
                        return $this->redirectToRoute('app_product_new');
                    }
                }

                // Persister le produit
                $entityManager->persist($product);
                $entityManager->flush();

                // Message de confirmation
                $this->addFlash('success', 'Produit créé avec succès!');

                return $this->redirectToRoute('app_product_index');
            } else {
                // Afficher les erreurs de validation
                $this->addFlash('error', 'Le formulaire contient des erreurs.');
            }
        }

        return $this->render('product/new.html.twig', [
            'product' => $product,
            'form' => $form->createView(),
        ]);
    }



    #[Route('/{id}/edit', name: 'app_product_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Product $product, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $newFilename = uniqid() . '.' . $imageFile->guessExtension();

                try {
                    // Déplacer l'image téléchargée
                    $imageFile->move(
                        $this->getParameter('uploads_directory'),
                        $newFilename
                    );

                    // Supprimer l'ancienne image si une nouvelle est téléchargée
                    if ($product->getImage()) {
                        $oldImagePath = $this->getParameter('uploads_directory') . '/' . $product->getImage();
                        if (file_exists($oldImagePath)) {
                            unlink($oldImagePath);
                        }
                    }

                    // Mettre à jour avec le nouveau nom de fichier
                    $product->setImage($newFilename);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement de l\'image.');
                }
            }

            $entityManager->flush();
            $this->addFlash('success', 'Produit mis à jour avec succès !');

            return $this->redirectToRoute('app_product_index');
        }

        return $this->render('product/edit.html.twig', [
            'product' => $product,
            'form' => $form->createView(),
            'currentImage' => $product->getImage(), // Passer l'image actuelle à la vue
        ]);
    }



    #[Route('/{id}', name: 'app_product_delete', methods: ['POST'])]
    public function delete(Request $request, Product $product, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$product->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($product);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_product_index', [], Response::HTTP_SEE_OTHER);
    }


    #[Route('/shop', name: 'shop_home', methods: ['GET'])]
    public function shopHome(CategoryRepository $categoryRepository): Response
    {
        // Récupérer toutes les catégories
        $categories = $categoryRepository->findAll();

        // Vérifier si des catégories existent
        if (!$categories) {
            $this->addFlash('warning', 'Aucune catégorie disponible.');
        }

        return $this->render('shop/home.html.twig', [
            'categories' => $categories,
        ]);
    }

    #[Route('/subcategory/{id}', name: 'shop_subcategory_products', methods: ['GET'])]
    public function subCategoryProducts(
        int $id,
        SubCategoryRepository $subCategoryRepository,
        ProductRepository $productRepository,
        MarqueRepository $marqueRepository,
        ModeleRepository $modeleRepository,
        MotorisationRepository $motorisationRepository,
        PaginatorInterface $paginator,
        CategoryRepository $categoryRepository,
        Request $request
    ): Response {
        // Récupérer la sous-catégorie
        $subCategory = $subCategoryRepository->find($id);

        // Si la sous-catégorie n'existe pas, afficher une erreur
        if (!$subCategory) {
            throw $this->createNotFoundException('Sous-catégorie introuvable.');
        }

        // Récupérer les produits de la sous-catégorie
        $query = $productRepository->createQueryBuilder('p')
            ->where('p.subCategory = :subCategory')
            ->setParameter('subCategory', $subCategory)
            ->getQuery();

        // Pagination des produits
        $products = $paginator->paginate(
            $query, // La requête ou le QueryBuilder
            $request->query->getInt('page', 1), // Page actuelle
            6 // Nombre d'éléments par page
        );

        // Récupérer les marques, modèles et motorisations
        $marques = $marqueRepository->findAll();
        $modeles = $modeleRepository->findAll();
        $motorisations = $motorisationRepository->findAll();
        $categories = $categoryRepository->findAll();


        return $this->render('shop/products.html.twig', [
            'subCategory' => $subCategory,
            'products' => $products,
            'marques' => $marques,
            'modeles' => $modeles,
            'categories' => $categories, // Passer les catégories au template

            'motorisations' => $motorisations,
            'criteria' => [ // Critères de recherche initialisés à null
                'marque' => null,
                'modele' => null,
                'motorisation' => null,
            ],
        ]);
    }


    #[Route('/subcategory/{id}/search', name: 'subcategory_search', methods: ['GET', 'POST'])]
    public function searchInSubCategory(
        int $id,
        Request $request,
        SubCategoryRepository $subCategoryRepository,
        ProductRepository $productRepository,
        MarqueRepository $marqueRepository,
        ModeleRepository $modeleRepository,
        MotorisationRepository $motorisationRepository,
        CategoryRepository $categoryRepository,

        PaginatorInterface $paginator // Ajout de la pagination
    ): Response {
        // Récupérer la sous-catégorie
        $subCategory = $subCategoryRepository->find($id);

        if (!$subCategory) {
            throw $this->createNotFoundException('Sous-catégorie introuvable.');
        }

        // Récupérer les critères de recherche
        $marqueId = $request->query->get('marque');
        $modeleId = $request->query->get('modele');
        $motorisationId = $request->query->get('motorisation');
        $categories = $categoryRepository->findAll();

        // Construire la requête pour les produits
        $queryBuilder = $productRepository->createQueryBuilder('p')
            ->where('p.subCategory = :subCategory')
            ->setParameter('subCategory', $subCategory);

        // Ajouter les filtres selon les critères sélectionnés
        if ($marqueId) {
            $queryBuilder->join('p.motorisations', 'motorisationMarque')
                ->join('motorisationMarque.modeles', 'modeleMarque')
                ->join('modeleMarque.marque', 'marque')
                ->andWhere('marque.id = :marqueId')
                ->setParameter('marqueId', $marqueId);
        }

        if ($modeleId) {
            $queryBuilder->join('p.motorisations', 'motorisationModele')
                ->join('motorisationModele.modeles', 'modele')
                ->andWhere('modele.id = :modeleId')
                ->setParameter('modeleId', $modeleId);
        }

        if ($motorisationId) {
            $queryBuilder->join('p.motorisations', 'motorisation')
                ->andWhere('motorisation.id = :motorisationId')
                ->setParameter('motorisationId', $motorisationId);
        }

        // Ajouter la pagination
        $productsPagination = $paginator->paginate(
            $queryBuilder->getQuery(), // QueryBuilder
            $request->query->getInt('page', 1), // Page actuelle
            6 // Limite d'éléments par page
        );

        // Charger les options pour le formulaire
        $marques = $marqueRepository->findAll();
        $modeles = $modeleRepository->findAll();
        $motorisations = $motorisationRepository->findAll();

        // Retourner la vue avec les données nécessaires
        return $this->render('shop/products.html.twig', [
            'subCategory' => $subCategory,
            'products' => $productsPagination, // Passez ici la pagination
            'marques' => $marques,
            'modeles' => $modeles,
            'categories' => $categories, // Passer les catégories au template

            'motorisations' => $motorisations,
            'criteria' => [
                'marque' => $marqueId,
                'modele' => $modeleId,
                'motorisation' => $motorisationId,
            ],
        ]);
    }





    #[Route('/{id}', name: 'app_product_show', methods: ['GET'])]
    public function show(Product $product): Response
    {
        return $this->render('product/show.html.twig', [
            'product' => $product,
        ]);
    }






}
