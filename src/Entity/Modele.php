<?php

namespace App\Entity;

use App\Repository\ModeleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ModeleRepository::class)]
class Modele
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\ManyToOne(targetEntity: Marque::class, inversedBy: 'modeles')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Marque $marque = null;

    #[ORM\ManyToMany(targetEntity: Motorisation::class, inversedBy: 'modeles')]
    #[ORM\JoinTable(name: "modele_motorisations")]
    private Collection $motorisations;

    public function __construct()
    {
        $this->motorisations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getMarque(): ?Marque
    {
        return $this->marque;
    }

    public function setMarque(?Marque $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    public function getMotorisations(): Collection
    {
        return $this->motorisations;
    }

    public function addMotorisation(Motorisation $motorisation): self
    {
        if (!$this->motorisations->contains($motorisation)) {
            $this->motorisations->add($motorisation);
            $motorisation->addModele($this);
        }

        return $this;
    }

    public function removeMotorisation(Motorisation $motorisation): self
    {
        if ($this->motorisations->removeElement($motorisation)) {
            $motorisation->removeModele($this);
        }

        return $this;
    }
}
