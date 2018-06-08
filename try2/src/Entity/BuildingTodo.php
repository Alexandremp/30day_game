<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass="App\Repository\BuildingTodoRepository")
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
     * @ORM\Column(type="string", length=255)
     */
    private $BuildingName1;
    /**
     * @ORM\Column(type="datetime")
     */
    private $TaskBuild1;
     /**
     * @ORM\Column(type="string", length=255)
     */
    private $BuildingName2;
    /**
     * @ORM\Column(type="datetime")
     */
    private $TaskBuild2;
     /**
     * @ORM\Column(type="string", length=255)
     */
    private $BuildingName3;
    /**
     * @ORM\Column(type="datetime")
     */
    private $TaskBuild3;
     /**
     * @ORM\Column(type="string", length=255)
     */
    private $BuildingName4;
    /**
     * @ORM\Column(type="datetime")
     */
    private $TaskBuild4;
     /**
     * @ORM\Column(type="string", length=255)
     */
    private $BuildingName5;
    /**
     * @ORM\Column(type="datetime")
     */
    private $TaskBuild5;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $BuildingName6;
    /**
     * @ORM\Column(type="datetime")
     */
    private $TaskBuild6;
     /**
     * @ORM\Column(type="string", length=255)
     */
    private $BuildingName7;
    /**
     * @ORM\Column(type="datetime")
     */
    private $TaskBuild7;
     /**
     * @ORM\Column(type="string", length=255)
     */
    private $BuildingName8;
    /**
     * @ORM\Column(type="datetime")
     */
    private $TaskBuild8;
        /**
     * @ORM\Column(type="string", length=255)
     */
    private $BuildingName9;
    /**
     * @ORM\Column(type="datetime")
     */
    private $TaskBuild9;
     /**
     * @ORM\Column(type="string", length=255)
     */
    private $BuildingName10;
    /**
     * @ORM\Column(type="datetime")
     */
    private $TaskBuild10;
    
}
