<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CityManagerRepository")
 */
class CityManager
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
    private $CityName;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\UserManager", inversedBy="cityManagers")
     */
    private $UserId;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\LandMass", cascade={"persist", "remove"})
     */
    private $LandMassId;

    public function getId()
    {
        return $this->id;
    }

    public function getCityName(): ?string
    {
        return $this->CityName;
    }

    public function setCityName(string $CityName): self
    {
        $this->CityName = $CityName;

        return $this;
    }

    public function getUserId(): ?UserManager
    {
        return $this->UserId;
    }

    public function setUserId(?UserManager $UserId): self
    {
        $this->UserId = $UserId;

        return $this;
    }

    public function getLandMassId(): ?LandMass
    {
        return $this->LandMassId;
    }

    public function setLandMassId(?LandMass $LandMassId): self
    {
        $this->LandMassId = $LandMassId;

        return $this;
    }
}
