<?php

namespace App\Entity;

use App\Repository\AccesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AccesRepository::class)
 */
class Acces
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Utilisateurid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Documentid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Autorisationid;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUtilisateurid(): ?string
    {
        return $this->Utilisateurid;
    }

    public function setUtilisateurid(string $Utilisateurid): self
    {
        $this->Utilisateurid = $Utilisateurid;

        return $this;
    }

    public function getDocumentid(): ?string
    {
        return $this->Documentid;
    }

    public function setDocumentid(string $Documentid): self
    {
        $this->Documentid = $Documentid;

        return $this;
    }

    public function getAutorisationid(): ?string
    {
        return $this->Autorisationid;
    }

    public function setAutorisationid(string $Autorisationid): self
    {
        $this->Autorisationid = $Autorisationid;

        return $this;
    }
}
