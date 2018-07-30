<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PlanetsRepository")
 */
class Planets
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
     * @ORM\ManyToOne(targetEntity="App\Entity\SolarSystem", inversedBy="planets")
     */
    private $SolarSystemId;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\LandMass", mappedBy="PlanetId")
     */
    private $landMasses;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Dungeons", mappedBy="LandMassId")
     */
    private $dungeons;

    public function __construct()
    {
        $this->landMasses = new ArrayCollection();
        $this->dungeons = new ArrayCollection();
    }

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

    public function getSolarSystemId(): ?SolarSystem
    {
        return $this->SolarSystemId;
    }

    public function setSolarSystemId(?SolarSystem $SolarSystemId): self
    {
        $this->SolarSystemId = $SolarSystemId;

        return $this;
    }

    /**
     * @return Collection|LandMass[]
     */
    public function getLandMasses(): Collection
    {
        return $this->landMasses;
    }

    public function addLandMass(LandMass $landMass): self
    {
        if (!$this->landMasses->contains($landMass)) {
            $this->landMasses[] = $landMass;
            $landMass->setPlanetId($this);
        }

        return $this;
    }

    public function removeLandMass(LandMass $landMass): self
    {
        if ($this->landMasses->contains($landMass)) {
            $this->landMasses->removeElement($landMass);
            // set the owning side to null (unless already changed)
            if ($landMass->getPlanetId() === $this) {
                $landMass->setPlanetId(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Dungeons[]
     */
    public function getDungeons(): Collection
    {
        return $this->dungeons;
    }

    public function addDungeon(Dungeons $dungeon): self
    {
        if (!$this->dungeons->contains($dungeon)) {
            $this->dungeons[] = $dungeon;
            $dungeon->setLandMassId($this);
        }

        return $this;
    }

    public function removeDungeon(Dungeons $dungeon): self
    {
        if ($this->dungeons->contains($dungeon)) {
            $this->dungeons->removeElement($dungeon);
            // set the owning side to null (unless already changed)
            if ($dungeon->getLandMassId() === $this) {
                $dungeon->setLandMassId(null);
            }
        }

        return $this;
    }
}
