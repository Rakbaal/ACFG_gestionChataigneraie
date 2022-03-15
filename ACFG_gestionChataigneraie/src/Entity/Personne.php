<?php

namespace App\Entity;

use App\Repository\PersonneRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PersonneRepository::class)]
class Personne
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 38)]
    private $PER_NOM;

    #[ORM\Column(type: 'string', length: 38)]
    private $PER_PRENOM;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $PER_MAIL;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $PER_TEL;

    #[ORM\ManyToMany(targetEntity: Entreprise::class, mappedBy: 'personnes')]
    private $entreprises;

    #[ORM\ManyToMany(targetEntity: Profil::class, inversedBy: 'personnes')]
    private $profils;

    #[ORM\ManyToMany(targetEntity: Fonction::class, inversedBy: 'personnes')]
    private $fonctions;

    public function __construct()
    {
        $this->entreprises = new ArrayCollection();
        $this->profils = new ArrayCollection();
        $this->fonctions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPERNOM(): ?string
    {
        return $this->PER_NOM;
    }

    public function setPERNOM(string $PER_NOM): self
    {
        $this->PER_NOM = $PER_NOM;

        return $this;
    }

    public function getPERPRENOM(): ?string
    {
        return $this->PER_PRENOM;
    }

    public function setPERPRENOM(string $PER_PRENOM): self
    {
        $this->PER_PRENOM = $PER_PRENOM;

        return $this;
    }

    public function getPERMAIL(): ?string
    {
        return $this->PER_MAIL;
    }

    public function setPERMAIL(?string $PER_MAIL): self
    {
        $this->PER_MAIL = $PER_MAIL;

        return $this;
    }

    public function getPERTEL(): ?string
    {
        return $this->PER_TEL;
    }

    public function setPERTEL(?string $PER_TEL): self
    {
        $this->PER_TEL = $PER_TEL;

        return $this;
    }

    /**
     * @return Collection<int, Entreprise>
     */
    public function getEntreprises(): Collection
    {
        return $this->entreprises;
    }

    public function addEntreprise(Entreprise $entreprise): self
    {
        if (!$this->entreprises->contains($entreprise)) {
            $this->entreprises[] = $entreprise;
            $entreprise->addPersonne($this);
        }

        return $this;
    }

    public function removeEntreprise(Entreprise $entreprise): self
    {
        if ($this->entreprises->removeElement($entreprise)) {
            $entreprise->removePersonne($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Profil>
     */
    public function getProfils(): Collection
    {
        return $this->profils;
    }

    public function addProfil(Profil $profil): self
    {
        if (!$this->profils->contains($profil)) {
            $this->profils[] = $profil;
        }

        return $this;
    }

    public function removeProfil(Profil $profil): self
    {
        $this->profils->removeElement($profil);

        return $this;
    }

    /**
     * @return Collection<int, Fonction>
     */
    public function getFonctions(): Collection
    {
        return $this->fonctions;
    }

    public function addFonction(Fonction $fonction): self
    {
        if (!$this->fonctions->contains($fonction)) {
            $this->fonctions[] = $fonction;
        }

        return $this;
    }

    public function removeFonction(Fonction $fonction): self
    {
        $this->fonctions->removeElement($fonction);

        return $this;
    }
}
