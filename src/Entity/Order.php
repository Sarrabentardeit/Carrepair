<?php

namespace App\Entity;

use App\Repository\OrderRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: OrderRepository::class)]
#[ORM\Table(name: '`order`')]
class Order
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Assert\NotNull]
    private ?\DateTimeInterface $dateCommande = null;

    #[ORM\Column(type: Types::FLOAT)]
    #[Assert\NotNull]
    #[Assert\PositiveOrZero]
    private ?float $montantTotal = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    private ?string $statut = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: "orders")]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $client = null;

    #[ORM\ManyToMany(targetEntity: Product::class, inversedBy: "orders")]
    #[ORM\JoinTable(name: "order_products")]
    private Collection $produits;

    // Statuts possibles
    public const STATUS_PENDING = 'En attente';
    public const STATUS_COMPLETED = 'Complétée';
    public const STATUS_CANCELED = 'Annulée';

    public function __construct()
    {
        $this->produits = new ArrayCollection();
        $this->dateCommande = new \DateTime();
        $this->statut = self::STATUS_PENDING;
    }

    // --- Getters & Setters ---
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateCommande(): ?\DateTimeInterface
    {
        return $this->dateCommande;
    }

    public function setDateCommande(?\DateTimeInterface $dateCommande): self
    {
        $this->dateCommande = $dateCommande;
        return $this;
    }

    public function getMontantTotal(): ?float
    {
        return $this->montantTotal;
    }

    public function setMontantTotal(?float $montantTotal): self
    {
        $this->montantTotal = $montantTotal;
        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(?string $statut): self
    {
        $this->statut = $statut;
        return $this;
    }

    public function getClient(): ?User
    {
        return $this->client;
    }

    public function setClient(?User $client): self
    {
        $this->client = $client;
        return $this;
    }

    /**
     * @return Collection<int, Product>
     */
    public function getProduits(): Collection
    {
        return $this->produits;
    }

    public function addProduit(Product $produit): self
    {
        if (!$this->produits->contains($produit)) {
            $this->produits[] = $produit;
            $produit->addOrder($this);
        }
        return $this;
    }

    public function removeProduit(Product $produit): self
    {
        if ($this->produits->removeElement($produit)) {
            $produit->removeOrder($this);
        }
        return $this;
    }

    public function calculerMontantTotal(): float
    {
        $this->montantTotal = 0;
        foreach ($this->produits as $produit) {
            $this->montantTotal += $produit->getPrix();
        }
        return $this->montantTotal;
    }

    public function processOrder(): void
    {
        foreach ($this->produits as $produit) {
            if ($produit->getQuantiteEnStock() < 1) {
                throw new \Exception("Le produit {$produit->getNom()} est en rupture de stock.");
            }
            $produit->setQuantiteEnStock($produit->getQuantiteEnStock() - 1);
        }
    }
}
