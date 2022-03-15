<?php

namespace App\Entity;

use App\Repository\PERSONNERepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PERSONNERepository::class)]
class PERSONNE
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $PER_ID;

    #[ORM\Column(type: 'string', length: 40)]
    private $PER_NOM;

    #[ORM\Column(type: 'string', length: 40)]
    private $PER_PRENOM;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $PER_EMAIL;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $PER_TEL;

    public function getPERID(): ?int
    {
        return $this->PER_ID;
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

    public function getPEREMAIL(): ?string
    {
        return $this->PER_EMAIL;
    }

    public function setPEREMAIL(?string $PER_EMAIL): self
    {
        $this->PER_EMAIL = $PER_EMAIL;

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
}
