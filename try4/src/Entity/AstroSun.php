<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AstroSunRepository")
 */
class AstroSun
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
    private $ImageType;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\SolarSystem", inversedBy="astroSuns")
     */
    private $SolarSystemId;

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

    public function getImageType(): ?int
    {
        return $this->ImageType;
    }

    public function setImageType(int $ImageType): self
    {
        $this->ImageType = $ImageType;

        return $this;
    }

    public function getSolarSystemId(): ?SolarSystem
    {
        return $this->SolarSystemId;
    }

    public function setSolarSystemId(?SolarSystem $SolarSystemId): self
    {
        $this->SolarSystemId = $SolarSystemId;

        return $this;
    }
}
