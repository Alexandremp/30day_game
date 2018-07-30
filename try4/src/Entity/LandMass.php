<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LandMassRepository")
 */
class LandMass
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $Name;

    /**
     * @ORM\Column(type="integer")
     */
    private $XAxis;

    /**
     * @ORM\Column(type="integer")
     */
    private $YAxis;

    /**
     * @ORM\Column(type="integer")
     */
    private $LandType;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Planets", inversedBy="landMasses")
     */
    private $PlanetId;

    public function getId()
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getXAxis(): ?int
    {
        return $this->XAxis;
    }

    public function setXAxis(int $XAxis): self
    {
        $this->XAxis = $XAxis;

        return $this;
    }

    public function getYAxis(): ?int
    {
        return $this->YAxis;
    }

    public function setYAxis(int $YAxis): self
    {
        $this->YAxis = $YAxis;

        return $this;
    }

    public function getLandType(): ?int
    {
        return $this->LandType;
    }

    public function setLandType(int $LandType): self
    {
        $this->LandType = $LandType;

        return $this;
    }

    public function getPlanetId(): ?Planets
    {
        return $this->PlanetId;
    }

    public function setPlanetId(?Planets $PlanetId): self
    {
        $this->PlanetId = $PlanetId;

        return $this;
    }
}
