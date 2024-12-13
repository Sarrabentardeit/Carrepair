<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Product>
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    /**
     * Vérifie si un produit dispose d'un stock suffisant
     *
     * @param int $productId L'ID du produit
     * @param int $quantite La quantité requise
     *
     * @return bool
     */
    public function isStockAvailable(int $productId, int $quantite): bool
    {
        $product = $this->find($productId);

        if (!$product) {
            return false; // Produit introuvable
        }

        return $product->getQuantiteEnStock() >= $quantite;
    }

    /**
     * Met à jour le stock d'un produit
     *
     * @param int $productId L'ID du produit
     * @param int $quantite La quantité à déduire
     */
    public function updateStock(int $productId, int $quantite): void
    {
        $product = $this->find($productId);

        if ($product && $product->getQuantiteEnStock() >= $quantite) {
            $nouveauStock = $product->getQuantiteEnStock() - $quantite;
            $product->setQuantiteEnStock($nouveauStock);

            $this->_em->persist($product);
            $this->_em->flush();
        }
    }
// In your ProductRepository



}
