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
    private $nbre_de_personnes;

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

    public function getNbreDePersonnes(): ?int
    {
        return $this->nbre_de_personnes;
    }

    public function setNbreDePersonnes(?int $nbre_de_personnes): self
    {
        $this->nbre_de_personnes = $nbre_de_personnes;

        return $this;
    }
}
