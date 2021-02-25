<?php

namespace App\Entity;

use App\Repository\AutorisationsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AutorisationsRepository::class)
 */
class Autorisations
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $lecture;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $ecriture;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLecture(): ?bool
    {
        return $this->lecture;
    }

    public function setLecture(?bool $lecture): self
    {
        $this->lecture = $lecture;

        return $this;
    }

    public function getEcriture(): ?bool
    {
        return $this->ecriture;
    }

    public function setEcriture(?bool $ecriture): self
    {
        $this->ecriture = $ecriture;

        return $this;
    }
}
