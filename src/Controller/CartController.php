<?php

namespace App\Controller;

use App\Entity\Order;
use App\Form\OrderType;
use App\Repository\ProductRepository;
use App\Service\CartService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/cart')]
class CartController extends AbstractController
{
    private CartService $cartService;
    private ProductRepository $productRepository;

    public function __construct(CartService $cartService, ProductRepository $productRepository)
    {
        $this->cartService = $cartService;
        $this->productRepository = $productRepository;
    }

    #[Route('/', name: 'cart_index', methods: ['GET'])]
    public function index(): Response
    {
        $cartItems = $this->cartService->getCartItems();
        $total = $this->cartService->getTotal();

        return $this->render('cart/index.html.twig', [
            'cartItems' => $cartItems,
            'total' => $total,
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

        // Récupérer les éléments du panier
        $cartItems = $cartService->getCartItems();
        $total = $cartService->getTotal();

        if ($form->isSubmitted() && $form->isValid()) {
            $order->setClient($this->getUser());
            $order->calculerMontantTotal();

            foreach ($cartItems as $item) {
                $produit = $item['product'];
                $quantite = $item['quantity'];

                if ($produit->getQuantiteEnStock() >= $quantite) {
                    $produit->setQuantiteEnStock($produit->getQuantiteEnStock() - $quantite);
                    $order->addProduit($produit);
                } else {
                    $this->addFlash('danger', "Le produit {$produit->getNom()} n'a pas assez de stock.");
                    return $this->redirectToRoute('cart_index');
                }
            }

            // Sauvegarder le panier dans la base de données
            $cartService->saveToDatabase();

            $entityManager->persist($order);
            $entityManager->flush();

            $cartService->clear(); // Vider le panier après la commande

            $this->addFlash('success', 'Commande créée avec succès.');
            return $this->redirectToRoute('app_order_index');
        }

        return $this->render('order/new.html.twig', [
            'form' => $form->createView(),
            'cartItems' => $cartItems,
            'total' => $total,
        ]);
    }


    #[Route('/add/{id}', name: 'cart_add', methods: ['POST'])]
    public function add(int $id, Request $request): JsonResponse
    {
        $quantity = (int) $request->request->get('quantity', 1);

        $product = $this->productRepository->find($id);

        if (!$product) {
            return new JsonResponse(['success' => false, 'message' => 'Produit introuvable.'], 404);
        }

        if (!$product->isInStock() || $product->getQuantiteEnStock() < $quantity) {
            return new JsonResponse([
                'success' => false,
                'message' => sprintf(
                    'Le produit "%s" est hors stock ou la quantité demandée dépasse le stock disponible (%d).',
                    $product->getNom(),
                    $product->getQuantiteEnStock()
                ),
            ], 400);
        }

        $this->cartService->add($id, $quantity);

        return new JsonResponse([
            'success' => true,
            'productName' => $product->getNom(),
            'productPrice' => $product->getPrix(),
            'productQuantity' => $quantity,
            'cartItemsCount' => $this->cartService->getCartItemCount(),
            'totalCart' => $this->cartService->getTotal(),
        ]);
    }

    #[Route('/remove/{id}', name: 'cart_remove', methods: ['GET'])]
    public function remove(int $id): RedirectResponse
    {
        $this->cartService->remove($id);
        $this->addFlash('success', 'Produit retiré du panier.');
        return $this->redirectToRoute('cart_index');
    }

    #[Route('/clear', name: 'cart_clear', methods: ['GET'])]
    public function clear(): RedirectResponse
    {
        $this->cartService->clear();
        $this->addFlash('success', 'Panier vidé.');
        return $this->redirectToRoute('cart_index');
    }
}
