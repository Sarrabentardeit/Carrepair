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
    #[Assert\NotNull(message: "La date de commande est obligatoire.")]
    private ?\DateTimeInterface $dateCommande = null;

    #[ORM\Column(type: Types::FLOAT)]
    #[Assert\NotNull(message: "Le montant total est obligatoire.")]
    #[Assert\PositiveOrZero(message: "Le montant total doit être positif.")]
    private ?float $montantTotal = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le statut est obligatoire.")]
    private ?string $statut = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: "orders")]
    #[ORM\JoinColumn(nullable: true)]
    private ?User $client = null;

    #[ORM\ManyToMany(targetEntity: Product::class, inversedBy: "orders")]
    #[ORM\JoinTable(name: "order_products")]
    private Collection $produits;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "Le nom est obligatoire.")]
    private ?string $nom = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "Le prénom est obligatoire.")]
    private ?string $prenom = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: "L'email est obligatoire.")]
    #[Assert\Email(message: "Veuillez entrer un email valide.")]
    private ?string $email = null;

    #[ORM\Column(length: 15)]
    #[Assert\NotBlank(message: "Le téléphone est obligatoire.")]
    #[Assert\Regex(
        pattern: '/^[0-9]{8,15}$/',
        message: "Veuillez entrer un numéro de téléphone valide."
    )]
    private ?string $telephone = null;
    #[ORM\Column(type: 'json')]
    private array $produitsCommande = []; // Initialisation par défaut avec un tableau vide


    #[ORM\Column(length: 50)]
    private ?string $typeLivraison = null;

    public function getProduitsCommande(): array
    {
        return $this->produitsCommande;
    }

    public function setProduitsCommande(array $produitsCommande): self
    {
        $this->produitsCommande = $produitsCommande;
        return $this;
    }

    public function getTypeLivraison(): ?string
    {
        return $this->typeLivraison;
    }

    public function setTypeLivraison(string $typeLivraison): self
    {
        $this->typeLivraison = $typeLivraison;
        return $this;
    }
    public function __construct()
    {
        $this->produits = new ArrayCollection();
        $this->dateCommande = new \DateTime();
        $this->statut = self::STATUS_PENDING;
        $this->montantTotal = 0.0; // Initialisation par défaut

    }

    public const STATUS_PENDING = 'En attente';
    public const STATUS_COMPLETED = 'Complétée';
    public const STATUS_CANCELED = 'Annulée';
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

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;
        return $this;
    }

    public function getProduits(): Collection
    {
        return $this->produits;
    }

    public function addProduit(Product $produit): self
    {
        if (!$this->produits->contains($produit)) {
            $this->produits[] = $produit;
        }
        return $this;
    }

    public function removeProduit(Product $produit): self
    {
        $this->produits->removeElement($produit);
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
}
