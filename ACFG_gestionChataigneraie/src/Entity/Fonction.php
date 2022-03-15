<?php

namespace App\Entity;

use App\Repository\FONCTIONRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FONCTIONRepository::class)]
class FONCTION
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $FON_ID;

    #[ORM\Column(type: 'string', length: 50)]
    private $FON_LIBELLE;

    public function getFONID(): ?int
    {
        return $this->FON_ID;
    }

    public function getFONLIBELLE(): ?string
    {
        return $this->FON_LIBELLE;
    }

    public function setFONLIBELLE(string $FON_LIBELLE): self
    {
        $this->FON_LIBELLE = $FON_LIBELLE;

        return $this;
    }
}
