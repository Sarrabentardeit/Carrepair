<?php
namespace App\Service;

use App\Entity\CartItem;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class CartService
{
    private $session;
    private $productRepository;
    private $entityManager;

    public function __construct(RequestStack $requestStack, ProductRepository $productRepository ,  EntityManagerInterface $entityManager)
    {
        $this->session = $requestStack->getSession(); // Utilise RequestStack pour obtenir la session
        $this->productRepository = $productRepository;
        $this->entityManager = $entityManager;

    }

    public function add(int $productId, int $quantity): void
    {
        $product = $this->productRepository->find($productId);

        if (!$product || !$product->isInStock() || $product->getQuantiteEnStock() < $quantity) {
            throw new \Exception('Quantité insuffisante ou produit hors stock.');
        }

        $cart = $this->session->get('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId] += $quantity;
        } else {
            $cart[$productId] = $quantity;
        }

        $this->session->set('cart', $cart);
    }
    public function remove(int $productId): void
    {
        $cart = $this->session->get('cart', []);
        unset($cart[$productId]);
        $this->session->set('cart', $cart);
    }

    public function getCartItems(): array
    {
        $cart = $this->session->get('cart', []);
        $cartItems = [];

        foreach ($cart as $productId => $quantity) {
            $product = $this->productRepository->find($productId);
            if ($product) {
                $cartItems[] = [
                    'product' => $product,
                    'quantity' => $quantity,
                    'total' => $product->getPrix() * $quantity,
                ];
            }
        }

        return $cartItems;
    }

    public function saveToDatabase(): void
    {
        $cart = $this->session->get('cart', []);

        // Log pour vérifier le contenu du panier
        error_log('Contenu du panier avant sauvegarde : ' . print_r($cart, true));

        if (empty($cart)) {
            error_log('Le panier est vide, rien à sauvegarder.');
            return;
        }

        foreach ($cart as $productId => $quantity) {
            $product = $this->productRepository->find($productId);

            if ($product) {
                $cartItem = new CartItem();
                $cartItem->setProduct($product);
                $cartItem->setQuantity($quantity);
                $cartItem->setPrice($product->getPrix());

                // Log chaque produit à sauvegarder
                error_log(sprintf(
                    'Ajout dans la base : Produit ID=%d, Quantité=%d, Prix=%.2f',
                    $productId,
                    $quantity,
                    $product->getPrix()
                ));

                $this->entityManager->persist($cartItem);
            } else {
                error_log("Produit introuvable pour l'ID : $productId");
            }
        }

        $this->entityManager->flush();
        error_log('Les données du panier ont été sauvegardées dans la base.');

        // Optionnel : vider le panier après la sauvegarde
        $this->clear();
    }





    public function getTotal(): float
    {
        $total = 0;
        foreach ($this->getCartItems() as $item) {
            $total += $item['total'];
        }
        return $total;
    }

    public function clear(): void
    {
        $this->session->remove('cart');
    }
    public function getCartItemCount(): int
    {
        $cart = $this->session->get('cart', []);
        return array_sum($cart);
    }

}
