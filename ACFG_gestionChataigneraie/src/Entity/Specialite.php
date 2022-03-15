<?php

namespace App\Entity;

use App\Repository\SPECIALITERepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SPECIALITERepository::class)]
class SPECIALITE
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $SPE_ID;

    #[ORM\Column(type: 'string', length: 50)]
    private $SPE_LIBELLE;

    public function getSPEID(): ?int
    {
        return $this->SPE_ID;
    }

    public function getSPELIBELLE(): ?string
    {
        return $this->SPE_LIBELLE;
    }

    public function setSPELIBELLE(string $SPE_LIBELLE): self
    {
        $this->SPE_LIBELLE = $SPE_LIBELLE;

        return $this;
    }
}
