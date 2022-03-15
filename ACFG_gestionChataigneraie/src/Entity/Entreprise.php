<?php

namespace App\Entity;

use App\Repository\ENTREPRISERepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ENTREPRISERepository::class)]
class ENTREPRISE
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $ENT_ID;

    #[ORM\Column(type: 'string', length: 50)]
    private $ENT_RS;

    #[ORM\Column(type: 'string', length: 50)]
    private $ENT_VILLE;

    #[ORM\Column(type: 'string', length: 42)]
    private $ENT_PAYS;

    #[ORM\Column(type: 'string', length: 70)]
    private $ENT_ADRESSE;

    #[ORM\Column(type: 'string', length: 5)]
    private $ENT_CP;

    public function getENTID(): ?int
    {
        return $this->ENT_ID;
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
}
