<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SolarSystemRepository")
 */
class SolarSystem
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
    private $NumberOfPlanets;

    /**
     * @ORM\Column(type="integer")
     */
    private $ImgType;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Galaxy", inversedBy="solarSystems")
     */
    private $GalaxyId;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Planets", mappedBy="SolarSystemId")
     */
    private $planets;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\AstroSun", mappedBy="SolarSystemId")
     */
    private $astroSuns;

    public function __construct()
    {
        $this->planets = new ArrayCollection();
        $this->astroSuns = new ArrayCollection();
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

    public function getNumberOfPlanets(): ?int
    {
        return $this->NumberOfPlanets;
    }

    public function setNumberOfPlanets(int $NumberOfPlanets): self
    {
        $this->NumberOfPlanets = $NumberOfPlanets;

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

    public function getGalaxyId(): ?Galaxy
    {
        return $this->GalaxyId;
    }

    public function setGalaxyId(?Galaxy $GalaxyId): self
    {
        $this->GalaxyId = $GalaxyId;

        return $this;
    }

    /**
     * @return Collection|Planets[]
     */
    public function getPlanets(): Collection
    {
        return $this->planets;
    }

    public function addPlanet(Planets $planet): self
    {
        if (!$this->planets->contains($planet)) {
            $this->planets[] = $planet;
            $planet->setSolarSystemId($this);
        }

        return $this;
    }

    public function removePlanet(Planets $planet): self
    {
        if ($this->planets->contains($planet)) {
            $this->planets->removeElement($planet);
            // set the owning side to null (unless already changed)
            if ($planet->getSolarSystemId() === $this) {
                $planet->setSolarSystemId(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|AstroSun[]
     */
    public function getAstroSuns(): Collection
    {
        return $this->astroSuns;
    }

    public function addAstroSun(AstroSun $astroSun): self
    {
        if (!$this->astroSuns->contains($astroSun)) {
            $this->astroSuns[] = $astroSun;
            $astroSun->setSolarSystemId($this);
        }

        return $this;
    }

    public function removeAstroSun(AstroSun $astroSun): self
    {
        if ($this->astroSuns->contains($astroSun)) {
            $this->astroSuns->removeElement($astroSun);
            // set the owning side to null (unless already changed)
            if ($astroSun->getSolarSystemId() === $this) {
                $astroSun->setSolarSystemId(null);
            }
        }

        return $this;
    }
}
