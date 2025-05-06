<?php

namespace App\Controller;

use App\Entity\Order;
use App\Entity\StockMovement;
use App\Form\OrderType;
use App\Repository\OrderRepository;
use App\Service\CartService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/order')]
class OrderController extends AbstractController
{
    #[Route(name: 'app_order_index', methods: ['GET'])]
    public function index(OrderRepository $orderRepository): Response
    {
        return $this->render('order/index.html.twig', [
            'orders' => $orderRepository->findBy(['client' => $this->getUser()]),
        ]);
    }


    #[Route('/new', name: 'app_order_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        CartService $cartService
    ): Response {
        $order = new Order();
        $form = $this->createForm(OrderType::class, $order);
        $form->handleRequest($request);

        // Récupérer les articles du panier et le sous-total
        $cartItems = $cartService->getCartItems();
        $sousTotal = $cartService->getTotal();

        // Initialisation des frais de livraison par défaut
        $fraisLivraison = 8.0;

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupérer le mode de livraison depuis la requête
            $modeLivraison = $request->request->get('modeLivraison');

            // Ajuster les frais de livraison pour le mode "Retrait au magasin"
            if ($modeLivraison === 'retrait') {
                $fraisLivraison = 0;
                $order->setTypeLivraison('Retrait au magasin');
            } else {
                $order->setTypeLivraison('Livraison Aramex');
            }

            // Construire la structure des produits commandés
            $produitsCommande = [];
            foreach ($cartItems as $item) {
                $produitsCommande[] = [
                    'nom' => $item['product']->getNom(),
                    'quantite' => $item['quantity'],
                    'prix' => $item['product']->getPrix(),
                ];

                // Décrémenter le stock du produit
                $item['product']->setQuantiteEnStock(
                    $item['product']->getQuantiteEnStock() - $item['quantity']
                );
                $entityManager->persist($item['product']);
            }

            // Enregistrer les produits commandés dans la commande
            $order->setProduitsCommande($produitsCommande);

            // Calculer le montant total
            $montantTotal = $sousTotal + $fraisLivraison;
            $order->setMontantTotal($montantTotal);

            // Enregistrer les autres informations
            $order->setClient($this->getUser());
            $entityManager->persist($order);
            $entityManager->flush();

            // Vider le panier après la commande
            $cartService->clear();

            $this->addFlash('success', 'Commande créée avec succès.');
            return $this->redirectToRoute('app_order_confirmation', ['id' => $order->getId()]);        }

        return $this->render('order/new.html.twig', [
            'form' => $form->createView(),
            'cartItems' => $cartItems,
            'sousTotal' => $sousTotal,
            'fraisLivraison' => $fraisLivraison,
            'total' => $sousTotal + $fraisLivraison,
        ]);
    }




    #[Route('/confirmation/{id}', name: 'app_order_confirmation', methods: ['GET'])]
    public function confirmation(Order $order): Response
    {
        return $this->render('order/confirmation.html.twig', [
            'order' => $order,
        ]);
    }


    #[Route('/{id}', name: 'app_order_show', methods: ['GET'])]
    public function show(Order $order): Response
    {
        if ($order->getClient() !== $this->getUser()) {
            throw $this->createAccessDeniedException("Vous n'avez pas accès à cette commande.");
        }

        return $this->render('order/show.html.twig', [
            'order' => $order,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_order_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Order $order, EntityManagerInterface $entityManager): Response
    {
        if ($order->getClient() !== $this->getUser()) {
            throw $this->createAccessDeniedException("Vous ne pouvez pas modifier cette commande.");
        }

        $form = $this->createForm(OrderType::class, $order);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $order->calculerMontantTotal(); // Met à jour le total
            $entityManager->flush();

            $this->addFlash('success', 'Commande modifiée avec succès.');

            return $this->redirectToRoute('app_order_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('order/edit.html.twig', [
            'order' => $order,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_order_delete', methods: ['POST'])]
    public function delete(Request $request, Order $order, EntityManagerInterface $entityManager): Response
    {
        // Vérifier que l'utilisateur connecté est bien le propriétaire de la commande
        if ($order->getClient() !== $this->getUser()) {
            throw $this->createAccessDeniedException("Vous ne pouvez pas supprimer cette commande.");
        }

        // Vérifier la validité du token CSRF
        if ($this->isCsrfTokenValid('delete' . $order->getId(), $request->request->get('_token'))) {

            // Parcourir les produits associés à la commande pour réajuster le stock
            foreach ($order->getProduits() as $produit) {
                $quantityToRestore = 1; // Ajustez en fonction de la logique (par exemple, quantité commandée)
                $nouvelleQuantite = $produit->getQuantiteEnStock() + $quantityToRestore;

                // Mettre à jour la quantité en stock
                $produit->setQuantiteEnStock($nouvelleQuantite);

                // Sauvegarder les modifications
                $entityManager->persist($produit);
            }

            // Supprimer la commande
            $entityManager->remove($order);
            $entityManager->flush();

            // Ajouter un message de succès
            $this->addFlash('success', 'Commande annulée et le stock des produits a été mis à jour.');
        }

        // Rediriger vers la liste des commandes
        return $this->redirectToRoute('app_order_index', [], Response::HTTP_SEE_OTHER);
    }

}
