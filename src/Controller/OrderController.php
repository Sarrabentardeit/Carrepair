<?php

namespace App\Controller;

use App\Entity\Order;
use App\Entity\StockMovement;
use App\Form\OrderType;
use App\Repository\OrderRepository;
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
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $order = new Order();
        $form = $this->createForm(OrderType::class, $order);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $order->setClient($this->getUser());
            $order->calculerMontantTotal(); // Recalcule le total avant d'enregistrer

            // **Gestion du stock**
            foreach ($order->getProduits() as $produit) {
                $quantiteCommandee = 1; // Exemple: ajustez selon le champ dans le formulaire

                if ($produit->getQuantiteEnStock() >= $quantiteCommandee) {
                    // Déduire le stock
                    $nouvelleQuantite = $produit->getQuantiteEnStock() - $quantiteCommandee;
                    $produit->setQuantiteEnStock($nouvelleQuantite);

                    // Historique de mouvement de stock
                    $stockMovement = new StockMovement();
                    $stockMovement->setProduit($produit)
                        ->setQuantite($quantiteCommandee)
                        ->setTypeMouvement('Déduction après commande')
                        ->setDateMouvement(new \DateTime());

                    $entityManager->persist($stockMovement);
                } else {
                    $this->addFlash('danger', "Stock insuffisant pour le produit : " . $produit->getNom());
                    return $this->redirectToRoute('app_order_new');
                }
            }

            $entityManager->persist($order);
            $entityManager->flush();

            $this->addFlash('success', 'Commande créée avec succès.');

            return $this->redirectToRoute('app_order_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('order/new.html.twig', [
            'order' => $order,
            'form' => $form->createView(),
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
        if ($order->getClient() !== $this->getUser()) {
            throw $this->createAccessDeniedException("Vous ne pouvez pas supprimer cette commande.");
        }

        if ($this->isCsrfTokenValid('delete'.$order->getId(), $request->request->get('_token'))) {
            // Gestion de l'annulation de la commande
            $order->setStatut('Annulé');

            // Mise à jour du stock des produits
            foreach ($order->getProduits() as $produit) {
                $nouvelleQuantite = $produit->getQuantiteEnStock() + 1;
                $produit->setQuantiteEnStock($nouvelleQuantite);

                // Historique de mouvement de stock
                $stockMovement = new StockMovement();
                $stockMovement->setProduit($produit)
                    ->setDateMouvement(new \DateTime())
                    ->setQuantite(1)
                    ->setTypeMouvement("Retour après annulation de commande");

                $entityManager->persist($stockMovement);
            }

            $entityManager->remove($order);
            $entityManager->flush();

            $this->addFlash('success', 'Commande annulée et produits retournés en stock.');
        }

        return $this->redirectToRoute('app_order_index', [], Response::HTTP_SEE_OTHER);
    }
}
