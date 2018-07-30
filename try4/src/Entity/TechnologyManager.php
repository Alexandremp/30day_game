<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TechnologyManagerRepository")
 */
class TechnologyManager
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
    private $DistributionCenter;

    /**
     * @ORM\Column(type="integer")
     */
    private $Cartography;

    /**
     * @ORM\Column(type="integer")
     */
    private $MerchantRoads;

    public function getId()
    {
        return $this->id;
    }

    public function getDistributionCenter(): ?int
    {
        return $this->DistributionCenter;
    }

    public function setDistributionCenter(int $DistributionCenter): self
    {
        $this->DistributionCenter = $DistributionCenter;

        return $this;
    }

    public function getCartography(): ?int
    {
        return $this->Cartography;
    }

    public function setCartography(int $Cartography): self
    {
        $this->Cartography = $Cartography;

        return $this;
    }

    public function getMerchantRoads(): ?int
    {
        return $this->MerchantRoads;
    }

    public function setMerchantRoads(int $MerchantRoads): self
    {
        $this->MerchantRoads = $MerchantRoads;

        return $this;
    }
}
