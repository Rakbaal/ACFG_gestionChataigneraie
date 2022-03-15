<?php

namespace App\Entity;

use App\Repository\SpecialiteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SpecialiteRepository::class)]
class Specialite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 40)]
    private $SPE_Libelle;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSPELibelle(): ?string
    {
        return $this->SPE_Libelle;
    }

    public function setSPELibelle(string $SPE_Libelle): self
    {
        $this->SPE_Libelle = $SPE_Libelle;

        return $this;
    }
}
