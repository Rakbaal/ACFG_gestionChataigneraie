<?php

namespace App\Entity;

use App\Repository\FonctionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FonctionRepository::class)]
class Fonction
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 50)]
    private $FON_LIBELLE;

    #[ORM\ManyToMany(targetEntity: Personne::class, mappedBy: 'fonctions')]
    private $personnes;

    public function __construct()
    {
        $this->personnes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFONLIBELLE(): ?string
    {
        return $this->FON_LIBELLE;
    }

    public function setFONLIBELLE(string $FON_LIBELLE): self
    {
        $this->FON_LIBELLE = $FON_LIBELLE;

        return $this;
    }

    /**
     * @return Collection<int, Personne>
     */
    public function getPersonnes(): Collection
    {
        return $this->personnes;
    }

    public function addPersonne(Personne $personne): self
    {
        if (!$this->personnes->contains($personne)) {
            $this->personnes[] = $personne;
            $personne->addFonction($this);
        }

        return $this;
    }

    public function removePersonne(Personne $personne): self
    {
        if ($this->personnes->removeElement($personne)) {
            $personne->removeFonction($this);
        }

        return $this;
    }
}
