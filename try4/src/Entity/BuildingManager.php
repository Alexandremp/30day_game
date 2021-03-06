<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BuildingManagerRepository")
 */
class BuildingManager
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
    private $ControlHQ;

    /**
     * @ORM\Column(type="integer")
     */
    private $DrillingRig;

    /**
     * @ORM\Column(type="integer")
     */
    private $Warehouse;

    /**
     * @ORM\Column(type="integer")
     */
    private $HuntersLodge;

    /**
     * @ORM\Column(type="integer")
     */
    private $Barracks;

    /**
     * @ORM\Column(type="integer")
     */
    private $Laboratory;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\CityManager", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Cityid;

    public function getId()
    {
        return $this->id;
    }

    public function getControlHQ(): ?int
    {
        return $this->ControlHQ;
    }

    public function setControlHQ(int $ControlHQ): self
    {
        $this->ControlHQ = $ControlHQ;

        return $this;
    }

    public function getDrillingRig(): ?int
    {
        return $this->DrillingRig;
    }

    public function setDrillingRig(int $DrillingRig): self
    {
        $this->DrillingRig = $DrillingRig;

        return $this;
    }

    public function getWarehouse(): ?int
    {
        return $this->Warehouse;
    }

    public function setWarehouse(int $Warehouse): self
    {
        $this->Warehouse = $Warehouse;

        return $this;
    }

    public function getHuntersLodge(): ?int
    {
        return $this->HuntersLodge;
    }

    public function setHuntersLodge(int $HuntersLodge): self
    {
        $this->HuntersLodge = $HuntersLodge;

        return $this;
    }

    public function getBarracks(): ?int
    {
        return $this->Barracks;
    }

    public function setBarracks(int $Barracks): self
    {
        $this->Barracks = $Barracks;

        return $this;
    }

    public function getLaboratory(): ?int
    {
        return $this->Laboratory;
    }

    public function setLaboratory(int $Laboratory): self
    {
        $this->Laboratory = $Laboratory;

        return $this;
    }

    public function getCityid(): ?CityManager
    {
        return $this->Cityid;
    }

    public function setCityid(CityManager $Cityid): self
    {
        $this->Cityid = $Cityid;

        return $this;
    }
}
