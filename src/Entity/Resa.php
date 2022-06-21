<?php

namespace App\Entity;

use App\Repository\ResaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ResaRepository::class)]
class Resa
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'date', nullable: true)]
    private $dateArrivee;

    #[ORM\Column(type: 'date', nullable: true)]
    private $dateDepart;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $nbreVoyageur;

    #[ORM\OneToOne(inversedBy: 'resa', targetEntity: BienLoc::class, cascade: ['persist', 'remove'])]
    private $price;

    #[ORM\ManyToOne(targetEntity: BienLoc::class, inversedBy: 'resas')]
    private $comments;

    #[ORM\OneToOne(inversedBy: 'resaTitle', targetEntity: BienLoc::class, cascade: ['persist', 'remove'])]
    private $title;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateArrivee(): ?\DateTimeInterface
    {
        return $this->dateArrivee;
    }

    public function setDateArrivee(?\DateTimeInterface $dateArrivee): self
    {
        $this->dateArrivee = $dateArrivee;

        return $this;
    }

    public function getDateDepart(): ?\DateTimeInterface
    {
        return $this->dateDepart;
    }

    public function setDateDepart(?\DateTimeInterface $dateDepart): self
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    public function getNbreVoyageur(): ?int
    { 
        return $this->nbreVoyageur;
    }

    public function setNbreVoyageur(?int $nbreVoyageur): self
    {
        $this->nbreVoyageur = $nbreVoyageur;

        return $this;
    }

    public function getPrice(): ?BienLoc
    {
        return $this->price;
    }

    public function setPrice(?BienLoc $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getComments(): ?BienLoc
    {
        return $this->comments;
    }

    public function setComments(?BienLoc $comments): self
    {
        $this->comments = $comments;

        return $this;
    }

    public function getTitle(): ?BienLoc
    {
        return $this->title;
    }

    public function setTitle(?BienLoc $title): self
    {
        $this->title = $title;

        return $this;
    }
}
