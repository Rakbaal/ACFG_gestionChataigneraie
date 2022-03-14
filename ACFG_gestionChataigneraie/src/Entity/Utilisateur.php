<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
class Utilisateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 40)]
    private $UTI_Login;

    #[ORM\Column(type: 'string', length: 40)]
    private $UTI_MotDePasse;

    #[ORM\Column(type: 'boolean')]
    private $UTI_Admin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUTILogin(): ?string
    {
        return $this->UTI_Login;
    }

    public function setUTILogin(string $UTI_Login): self
    {
        $this->UTI_Login = $UTI_Login;

        return $this;
    }

    public function getUTIMotDePasse(): ?string
    {
        return $this->UTI_MotDePasse;
    }

    public function setUTIMotDePasse(string $UTI_MotDePasse): self
    {
        $this->UTI_MotDePasse = $UTI_MotDePasse;

        return $this;
    }

    public function getUTIAdmin(): ?bool
    {
        return $this->UTI_Admin;
    }

    public function setUTIAdmin(bool $UTI_Admin): self
    {
        $this->UTI_Admin = $UTI_Admin;

        return $this;
    }
}
