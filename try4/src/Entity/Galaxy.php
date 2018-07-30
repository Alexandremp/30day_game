<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GalaxyRepository")
 */
class Galaxy
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $ImgType;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $Name;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\SolarSystem", mappedBy="GalaxyId")
     */
    private $solarSystems;

    public function __construct()
    {
        $this->solarSystems = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
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

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    /**
     * @return Collection|SolarSystem[]
     */
    public function getSolarSystems(): Collection
    {
        return $this->solarSystems;
    }

    public function addSolarSystem(SolarSystem $solarSystem): self
    {
        if (!$this->solarSystems->contains($solarSystem)) {
            $this->solarSystems[] = $solarSystem;
            $solarSystem->setGalaxyId($this);
        }

        return $this;
    }

    public function removeSolarSystem(SolarSystem $solarSystem): self
    {
        if ($this->solarSystems->contains($solarSystem)) {
            $this->solarSystems->removeElement($solarSystem);
            // set the owning side to null (unless already changed)
            if ($solarSystem->getGalaxyId() === $this) {
                $solarSystem->setGalaxyId(null);
            }
        }

        return $this;
    }
}
