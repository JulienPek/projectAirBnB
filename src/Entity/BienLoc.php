<?php

namespace App\Entity;

use App\Repository\BienLocRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BienLocRepository::class)]
class BienLoc
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $adress;

    #[ORM\Column(type: 'text')]
    private $description;

    #[ORM\Column(type: 'string', length: 255)]
    private $capacity;

    #[ORM\Column(type: 'string', length: 255)]
    private $image;

    #[ORM\Column(type: 'float', nullable: true)]
    private $price;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $comments;

    #[ORM\OneToOne(mappedBy: 'price', targetEntity: Resa::class, cascade: ['persist', 'remove'])]
    private $resa;

    #[ORM\OneToMany(mappedBy: 'comments', targetEntity: Resa::class)]
    private $resas;

    #[ORM\Column(type: 'string', length: 255)]
    private $title;

    #[ORM\OneToOne(mappedBy: 'title', targetEntity: Resa::class, cascade: ['persist', 'remove'])]
    private $resaTitle;
    
    public function __construct()
    {
        $this->resas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCapacity(): ?string
    {
        return $this->capacity;
    }

    public function setCapacity(string $capacity): self
    {
        $this->capacity = $capacity;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getComments(): ?string
    {
        return $this->comments;
    }

    public function setComments(?string $comments): self
    {
        $this->comments = $comments;

        return $this;
    }

    public function getResa(): ?Resa
    {
        return $this->resa;
    }

    public function setResa(?Resa $resa): self
    {
        // unset the owning side of the relation if necessary
        if ($resa === null && $this->resa !== null) {
            $this->resa->setPrice(null);
        }

        // set the owning side of the relation if necessary
        if ($resa !== null && $resa->getPrice() !== $this) {
            $resa->setPrice($this);
        }

        $this->resa = $resa;

        return $this;
    }

    /**
     * @return Collection<int, Resa>
     */
    public function getResas(): Collection
    {
        return $this->resas;
    }

    public function addResa(Resa $resa): self
    {
        if (!$this->resas->contains($resa)) {
            $this->resas[] = $resa;
            $resa->setComments($this);
        }

        return $this;
    }

    public function removeResa(Resa $resa)
    {
        if ($this->resas->removeElement($resa)) {
            // set the owning side to null (unless already changed)
            if ($resa->getComments() === $this) {
                $resa->setComments(null);
            }
        }
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getResaTitle(): ?Resa
    {
        return $this->resaTitle;
    }

    public function setResaTitle(?Resa $resaTitle): self
    {
        // unset the owning side of the relation if necessary
        if ($resaTitle === null && $this->resaTitle !== null) {
            $this->resaTitle->setTitle(null);
        }

        // set the owning side of the relation if necessary
        if ($resaTitle !== null && $resaTitle->getTitle() !== $this) {
            $resaTitle->setTitle($this);
        }

        $this->resaTitle = $resaTitle;

        return $this;
    }
}
