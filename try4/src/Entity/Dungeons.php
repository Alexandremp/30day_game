<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DungeonsRepository")
 */
class Dungeons
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
    private $ImgType;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Planets", inversedBy="dungeons")
     */
    private $LandMassId;

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

    public function getImgType(): ?int
    {
        return $this->ImgType;
    }

    public function setImgType(int $ImgType): self
    {
        $this->ImgType = $ImgType;

        return $this;
    }

    public function getLandMassId(): ?Planets
    {
        return $this->LandMassId;
    }

    public function setLandMassId(?Planets $LandMassId): self
    {
        $this->LandMassId = $LandMassId;

        return $this;
    }
}
