<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass="App\Repository\BuildingsRepository")
 */
class BuildingTodo
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
    private $NumberOfTasks;
        /**
     * @ORM\Column(type="integer")
     */
    private $NumberOfFreeTasks;
    /**
     * @ORM\Column(type="integer")
     */
    private $TaskBuild1;
    /**
     * @ORM\Column(type="integer")
     */
    private $TaskBuild2;
    /**
     * @ORM\Column(type="integer")
     */
    private $TaskBuild3;
    /**
     * @ORM\Column(type="integer")
     */
    private $TaskBuild4;
    /**
     * @ORM\Column(type="integer")
     */
    private $TaskBuild5;
    /**
     * @ORM\Column(type="integer")
     */
    private $TaskBuild6;
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
}
