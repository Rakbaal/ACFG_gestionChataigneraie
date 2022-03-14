<?php

namespace App\Entity;

use App\Repository\FonctionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FonctionRepository::class)]
class Fonction
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 40)]
    private $FON_Libelle;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFONLibelle(): ?string
    {
        return $this->FON_Libelle;
    }

    public function setFONLibelle(string $FON_Libelle): self
    {
        $this->FON_Libelle = $FON_Libelle;

        return $this;
    }
}
