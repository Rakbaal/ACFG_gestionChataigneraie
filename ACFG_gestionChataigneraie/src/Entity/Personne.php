<?php

namespace App\Entity;

use App\Repository\PersonneRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PersonneRepository::class)]
class Personne
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 40)]
    private $PER_Nom;

    #[ORM\Column(type: 'string', length: 40)]
    private $PER_Prenom;

    #[ORM\Column(type: 'string', length: 254, nullable: true)]
    private $PER_Mail;

    #[ORM\Column(type: 'string', length: 20, nullable: true)]
    private $PER_Telephone;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPERNom(): ?string
    {
        return $this->PER_Nom;
    }

    public function setPERNom(string $PER_Nom): self
    {
        $this->PER_Nom = $PER_Nom;

        return $this;
    }

    public function getPERPrenom(): ?string
    {
        return $this->PER_Prenom;
    }

    public function setPERPrenom(string $PER_Prenom): self
    {
        $this->PER_Prenom = $PER_Prenom;

        return $this;
    }

    public function getPERMail(): ?string
    {
        return $this->PER_Mail;
    }

    public function setPERMail(?string $PER_Mail): self
    {
        $this->PER_Mail = $PER_Mail;

        return $this;
    }

    public function getPERTelephone(): ?string
    {
        return $this->PER_Telephone;
    }

    public function setPERTelephone(?string $PER_Telephone): self
    {
        $this->PER_Telephone = $PER_Telephone;

        return $this;
    }
}
