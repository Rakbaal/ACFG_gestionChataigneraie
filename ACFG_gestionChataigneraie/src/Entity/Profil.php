<?php

namespace App\Entity;

use App\Repository\ProfilRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProfilRepository::class)]
class Profil
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 40)]
    private $PRO_Libelle;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPROLibelle(): ?string
    {
        return $this->PRO_Libelle;
    }

    public function setPROLibelle(string $PRO_Libelle): self
    {
        $this->PRO_Libelle = $PRO_Libelle;

        return $this;
    }
}
