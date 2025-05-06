<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getDateAjout(): ?\DateTimeInterface
    {
        return $this->dateAjout;
    }

    public function setDateAjout(?\DateTimeInterface $dateAjout): void
    {
        $this->dateAjout = $dateAjout;
    }
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;
        return $this;
    }

    #[ORM\ManyToMany(targetEntity: Motorisation::class, inversedBy: 'products')]
    private Collection $motorisations;


    public function getMotorisations(): Collection
    {
        return $this->motorisations;
    }

    public function addMotorisation(Motorisation $motorisation): self
    {
        if (!$this->motorisations->contains($motorisation)) {
            $this->motorisations->add($motorisation);
        }

        return $this;
    }

    public function removeMotorisation(Motorisation $motorisation): self
    {
        $this->motorisations->removeElement($motorisation);

        return $this;
    }

    public function getStockMovements(): Collection
    {
        return $this->stockMovements;
    }

    public function setStockMovements(Collection $stockMovements): void
    {
        $this->stockMovements = $stockMovements;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function getQuantiteEnStock(): ?int
    {
        return $this->quantiteEnStock;
    }

    public function setQuantiteEnStock(?int $quantiteEnStock): void
    {
        $this->quantiteEnStock = $quantiteEnStock;
    }

    public function setPrix(?float $prix): void
    {
        $this->prix = $prix;
    }

    #[ORM\Column(type: Types::FLOAT)]
    private ?float $prix = null;
    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $nom = null;
    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function addOrder(Order $order): self
    {
        if (!$this->orders->contains($order)) {
            $this->orders[] = $order;
        }

        return $this;
    }
    public function removeOrder(Order $order): self
    {
        $this->orders->removeElement($order);

        return $this;
    }
    public function getOrders(): Collection
    {
        return $this->orders;
    }

    public function setOrders(Collection $orders): void
    {
        $this->orders = $orders;
    }

    public function setNom(?string $nom): void
    {
        $this->nom = $nom;
    }

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: Types::INTEGER)]
    private ?int $quantiteEnStock = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateAjout = null;

    // SEO Fields
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $seoTitre = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $seoDescription = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $slug = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $motsCles = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $textePromotion = null;

    // Image Fields
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomImage = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $texteAlternatif = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $titreImage = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $descriptionImage = null;
    #[ORM\ManyToOne(targetEntity: Category::class, inversedBy: 'products')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Category $category = null;

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    // SEO Options Techniques
    #[ORM\Column(type: Types::BOOLEAN, options: ["default" => true])]
    private ?bool $indexable = true;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $canonicalUrl = null;

    #[ORM\OneToMany(mappedBy: 'produit', targetEntity: StockMovement::class, cascade: ['persist', 'remove'])]
    private Collection $stockMovements;

    #[ORM\ManyToMany(targetEntity: Order::class, mappedBy: "produits")]
    private Collection $orders;
    #[ORM\ManyToOne(targetEntity: SubCategory::class, inversedBy: 'products')]
    #[ORM\JoinColumn(nullable: true)]
    private ?SubCategory $subCategory;
    public function getSubCategory(): ?SubCategory
    {
        return $this->subCategory;
    }

    public function setSubCategory(?SubCategory $subCategory): self
    {
        $this->subCategory = $subCategory;

        // Associer automatiquement la catégorie basée sur la sous-catégorie
        if ($subCategory) {
            $this->category = $subCategory->getCategory();
        }

        return $this;
    }
    public function __construct()
    {
        $this->stockMovements = new ArrayCollection();
        $this->orders = new ArrayCollection();
        $this->motorisations = new ArrayCollection();


    }
    public function isInStock(): bool
    {
        return $this->quantiteEnStock > 0;
    }

    // --- Getters & Setters pour les nouveaux champs ---

    public function getSeoTitre(): ?string
    {
        return $this->seoTitre;
    }

    public function setSeoTitre(?string $seoTitre): self
    {
        $this->seoTitre = $seoTitre;
        return $this;
    }

    public function getSeoDescription(): ?string
    {
        return $this->seoDescription;
    }

    public function setSeoDescription(?string $seoDescription): self
    {
        $this->seoDescription = $seoDescription;
        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): self
    {
        $this->slug = $slug;
        return $this;
    }

    public function getMotsCles(): ?string
    {
        return $this->motsCles;
    }

    public function setMotsCles(?string $motsCles): self
    {
        $this->motsCles = $motsCles;
        return $this;
    }

    public function getTextePromotion(): ?string
    {
        return $this->textePromotion;
    }

    public function setTextePromotion(?string $textePromotion): self
    {
        $this->textePromotion = $textePromotion;
        return $this;
    }

    public function getNomImage(): ?string
    {
        return $this->nomImage;
    }

    public function setNomImage(?string $nomImage): self
    {
        $this->nomImage = $nomImage;
        return $this;
    }

    public function getTexteAlternatif(): ?string
    {
        return $this->texteAlternatif;
    }

    public function setTexteAlternatif(?string $texteAlternatif): self
    {
        $this->texteAlternatif = $texteAlternatif;
        return $this;
    }

    public function getTitreImage(): ?string
    {
        return $this->titreImage;
    }

    public function setTitreImage(?string $titreImage): self
    {
        $this->titreImage = $titreImage;
        return $this;
    }

    public function getDescriptionImage(): ?string
    {
        return $this->descriptionImage;
    }

    public function setDescriptionImage(?string $descriptionImage): self
    {
        $this->descriptionImage = $descriptionImage;
        return $this;
    }

    public function getIndexable(): ?bool
    {
        return $this->indexable;
    }

    public function setIndexable(bool $indexable): self
    {
        $this->indexable = $indexable;
        return $this;
    }

    public function getCanonicalUrl(): ?string
    {
        return $this->canonicalUrl;
    }

    public function setCanonicalUrl(?string $canonicalUrl): self
    {
        $this->canonicalUrl = $canonicalUrl;
        return $this;
    }
}
