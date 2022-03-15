<?php

namespace App\Entity;

use App\Repository\EntrepriseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EntrepriseRepository::class)]
class Entreprise
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 50)]
    private $ENT_RS;

    #[ORM\Column(type: 'string', length: 50)]
    private $ENT_VILLE;

    #[ORM\Column(type: 'string', length: 50)]
    private $ENT_PAYS;

    #[ORM\Column(type: 'string', length: 70)]
    private $ENT_ADRESSE;

    #[ORM\Column(type: 'string', length: 5)]
    private $ENT_CP;

    #[ORM\ManyToMany(targetEntity: Personne::class, inversedBy: 'entreprises')]
    private $personnes;

    #[ORM\ManyToMany(targetEntity: Specialite::class, inversedBy: 'entreprises')]
    private $specialites;

    public function __construct()
    {
        $this->personnes = new ArrayCollection();
        $this->specialites = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getENTRS(): ?string
    {
        return $this->ENT_RS;
    }

    public function setENTRS(string $ENT_RS): self
    {
        $this->ENT_RS = $ENT_RS;

        return $this;
    }

    public function getENTVILLE(): ?string
    {
        return $this->ENT_VILLE;
    }

    public function setENTVILLE(string $ENT_VILLE): self
    {
        $this->ENT_VILLE = $ENT_VILLE;

        return $this;
    }

    public function getENTPAYS(): ?string
    {
        return $this->ENT_PAYS;
    }

    public function setENTPAYS(string $ENT_PAYS): self
    {
        $this->ENT_PAYS = $ENT_PAYS;

        return $this;
    }

    public function getENTADRESSE(): ?string
    {
        return $this->ENT_ADRESSE;
    }

    public function setENTADRESSE(string $ENT_ADRESSE): self
    {
        $this->ENT_ADRESSE = $ENT_ADRESSE;

        return $this;
    }

    public function getENTCP(): ?string
    {
        return $this->ENT_CP;
    }

    public function setENTCP(string $ENT_CP): self
    {
        $this->ENT_CP = $ENT_CP;

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
        }

        return $this;
    }

    public function removePersonne(Personne $personne): self
    {
        $this->personnes->removeElement($personne);

        return $this;
    }

    /**
     * @return Collection<int, Specialite>
     */
    public function getSpecialites(): Collection
    {
        return $this->specialites;
    }

    public function addSpecialite(Specialite $specialite): self
    {
        if (!$this->specialites->contains($specialite)) {
            $this->specialites[] = $specialite;
        }

        return $this;
    }

    public function removeSpecialite(Specialite $specialite): self
    {
        $this->specialites->removeElement($specialite);

        return $this;
    }
}
