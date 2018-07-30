<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserManagerRepository")
 */
class UserManager
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
    private $Username;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CityManager", mappedBy="UserId")
     */
    private $cityManagers;

    public function __construct()
    {
        $this->cityManagers = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->Username;
    }

    public function setUsername(string $Username): self
    {
        $this->Username = $Username;

        return $this;
    }

    /**
     * @return Collection|CityManager[]
     */
    public function getCityManagers(): Collection
    {
        return $this->cityManagers;
    }

    public function addCityManager(CityManager $cityManager): self
    {
        if (!$this->cityManagers->contains($cityManager)) {
            $this->cityManagers[] = $cityManager;
            $cityManager->setUserId($this);
        }

        return $this;
    }

    public function removeCityManager(CityManager $cityManager): self
    {
        if ($this->cityManagers->contains($cityManager)) {
            $this->cityManagers->removeElement($cityManager);
            // set the owning side to null (unless already changed)
            if ($cityManager->getUserId() === $this) {
                $cityManager->setUserId(null);
            }
        }

        return $this;
    }
}
