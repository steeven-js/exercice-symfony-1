<?php

namespace App\Entity;

use App\Repository\PortableRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PortableRepository::class)]
class Portable
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?float $price = null;

    #[ORM\Column(length: 255)]
    private ?string $marque = null;

    #[ORM\Column(length: 255)]
    private ?string $modele = null;

    #[ORM\Column(length: 255)]
    private ?string $os = null;

    #[ORM\Column(length: 255)]
    private ?string $pocesseur = null;

    #[ORM\Column(length: 255)]
    private ?string $memoire = null;

    #[ORM\Column(length: 255)]
    private ?string $graphisme = null;

    #[ORM\Column(length: 255)]
    private ?string $affichage = null;

    #[ORM\Column(length: 255)]
    private ?string $stockage = null;

    #[ORM\Column(length: 255)]
    private ?string $communication = null;

    #[ORM\Column(length: 255)]
    private ?string $equipement = null;

    #[ORM\Column(length: 255)]
    private ?string $connectique = null;

    #[ORM\Column(length: 255)]
    private ?string $couleur = null;

    #[ORM\Column(length: 255)]
    private ?string $dimension = null;

    #[ORM\Column(length: 255)]
    private ?string $poid = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(string $modele): self
    {
        $this->modele = $modele;

        return $this;
    }

    public function getOs(): ?string
    {
        return $this->os;
    }

    public function setOs(string $os): self
    {
        $this->os = $os;

        return $this;
    }

    public function getPocesseur(): ?string
    {
        return $this->pocesseur;
    }

    public function setPocesseur(string $pocesseur): self
    {
        $this->pocesseur = $pocesseur;

        return $this;
    }

    public function getMemoire(): ?string
    {
        return $this->memoire;
    }

    public function setMemoire(string $memoire): self
    {
        $this->memoire = $memoire;

        return $this;
    }

    public function getGraphisme(): ?string
    {
        return $this->graphisme;
    }

    public function setGraphisme(string $graphisme): self
    {
        $this->graphisme = $graphisme;

        return $this;
    }

    public function getAffichage(): ?string
    {
        return $this->affichage;
    }

    public function setAffichage(string $affichage): self
    {
        $this->affichage = $affichage;

        return $this;
    }

    public function getStockage(): ?string
    {
        return $this->stockage;
    }

    public function setStockage(string $stockage): self
    {
        $this->stockage = $stockage;

        return $this;
    }

    public function getCommunication(): ?string
    {
        return $this->communication;
    }

    public function setCommunication(string $communication): self
    {
        $this->communication = $communication;

        return $this;
    }

    public function getEquipement(): ?string
    {
        return $this->equipement;
    }

    public function setEquipement(string $equipement): self
    {
        $this->equipement = $equipement;

        return $this;
    }

    public function getConnectique(): ?string
    {
        return $this->connectique;
    }

    public function setConnectique(string $connectique): self
    {
        $this->connectique = $connectique;

        return $this;
    }

    public function getCouleur(): ?string
    {
        return $this->couleur;
    }

    public function setCouleur(string $couleur): self
    {
        $this->couleur = $couleur;

        return $this;
    }

    public function getDimension(): ?string
    {
        return $this->dimension;
    }

    public function setDimension(string $dimension): self
    {
        $this->dimension = $dimension;

        return $this;
    }

    public function getPoid(): ?string
    {
        return $this->poid;
    }

    public function setPoid(string $poid): self
    {
        $this->poid = $poid;

        return $this;
    }
}
