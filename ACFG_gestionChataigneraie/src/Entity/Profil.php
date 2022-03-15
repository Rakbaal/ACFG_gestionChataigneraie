<?php

namespace App\Entity;

use App\Repository\PROFILRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PROFILRepository::class)]
class PROFIL
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $PRO_ID;

    #[ORM\Column(type: 'string', length: 50)]
    private $PRO_TYPE;

    public function getPROID(): ?int
    {
        return $this->PRO_ID;
    }

    public function getPROTYPE(): ?string
    {
        return $this->PRO_TYPE;
    }

    public function setPROTYPE(string $PRO_TYPE): self
    {
        $this->PRO_TYPE = $PRO_TYPE;

        return $this;
    }
}
