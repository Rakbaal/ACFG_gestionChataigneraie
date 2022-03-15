<?php

namespace App\Entity;

use App\Repository\UTILISATEURRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UTILISATEURRepository::class)]
class UTILISATEUR
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $UTI_ID;

    #[ORM\Column(type: 'string', length: 50)]
    private $UTI_LOGIN;

    #[ORM\Column(type: 'string', length: 50)]
    private $UTI_MDP;

    #[ORM\Column(type: 'boolean')]
    private $UTI_ADMIN;

    public function getUTIID(): ?int
    {
        return $this->UTI_ID;
    }

    public function getUTILOGIN(): ?string
    {
        return $this->UTI_LOGIN;
    }

    public function setUTILOGIN(string $UTI_LOGIN): self
    {
        $this->UTI_LOGIN = $UTI_LOGIN;

        return $this;
    }

    public function getUTIMDP(): ?string
    {
        return $this->UTI_MDP;
    }

    public function setUTIMDP(string $UTI_MDP): self
    {
        $this->UTI_MDP = $UTI_MDP;

        return $this;
    }

    public function getUTIADMIN(): ?bool
    {
        return $this->UTI_ADMIN;
    }

    public function setUTIADMIN(bool $UTI_ADMIN): self
    {
        $this->UTI_ADMIN = $UTI_ADMIN;

        return $this;
    }
}
