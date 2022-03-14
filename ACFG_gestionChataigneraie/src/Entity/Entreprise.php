<?php

namespace App\Entity;

use App\Repository\EntrepriseRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EntrepriseRepository::class)]
class Entreprise
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 40)]
    private $ENT_RaisonSociale;

    #[ORM\Column(type: 'string', length: 50)]
    private $ENT_Ville;

    #[ORM\Column(type: 'string', length: 42)]
    private $ENT_Pays;

    #[ORM\Column(type: 'string', length: 60)]
    private $ENT_Adresse;

    #[ORM\Column(type: 'string', length: 5)]
    private $ENT_CodePostal;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getENTRaisonSociale(): ?string
    {
        return $this->ENT_RaisonSociale;
    }

    public function setENTRaisonSociale(string $ENT_RaisonSociale): self
    {
        $this->ENT_RaisonSociale = $ENT_RaisonSociale;

        return $this;
    }

    public function getENTVille(): ?string
    {
        return $this->ENT_Ville;
    }

    public function setENTVille(string $ENT_Ville): self
    {
        $this->ENT_Ville = $ENT_Ville;

        return $this;
    }

    public function getENTPays(): ?string
    {
        return $this->ENT_Pays;
    }

    public function setENTPays(string $ENT_Pays): self
    {
        $this->ENT_Pays = $ENT_Pays;

        return $this;
    }

    public function getENTAdresse(): ?string
    {
        return $this->ENT_Adresse;
    }

    public function setENTAdresse(string $ENT_Adresse): self
    {
        $this->ENT_Adresse = $ENT_Adresse;

        return $this;
    }

    public function getENTCodePostal(): ?string
    {
        return $this->ENT_CodePostal;
    }

    public function setENTCodePostal(string $ENT_CodePostal): self
    {
        $this->ENT_CodePostal = $ENT_CodePostal;

        return $this;
    }
}
