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
     * @ORM\Column(type="integer", nullable=true)
     */
    private $NumberOfTasks;

    /**
     * @ORM\Column(type="integer")
     */
    private $NumberOfFreeTasks;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $TaskRemaingTime;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $TaskRemaingTime2;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Task1;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Task2;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Task3;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Task4;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Task5;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Task6;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Task7;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Task8;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Task9;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Task10;

    public function getId()
    {
        return $this->id;
    }

    public function getNumberOfTasks(): ?int
    {
        return $this->NumberOfTasks;
    }

    public function setNumberOfTasks(?int $NumberOfTasks): self
    {
        $this->NumberOfTasks = $NumberOfTasks;

        return $this;
    }

    public function getNumberOfFreeTasks(): ?int
    {
        return $this->NumberOfFreeTasks;
    }

    public function setNumberOfFreeTasks(int $NumberOfFreeTasks): self
    {
        $this->NumberOfFreeTasks = $NumberOfFreeTasks;

        return $this;
    }

    public function getTaskRemaingTime(): ?\DateTimeInterface
    {
        return $this->TaskRemaingTime;
    }

    public function setTaskRemaingTime(?\DateTimeInterface $TaskRemaingTime): self
    {
        $this->TaskRemaingTime = $TaskRemaingTime;

        return $this;
    }

    public function getTaskRemaingTime2(): ?\DateTimeInterface
    {
        return $this->TaskRemaingTime2;
    }

    public function setTaskRemaingTime2(?\DateTimeInterface $TaskRemaingTime2): self
    {
        $this->TaskRemaingTime2 = $TaskRemaingTime2;

        return $this;
    }

    public function getTask1(): ?int
    {
        return $this->Task1;
    }

    public function setTask1(?int $Task1): self
    {
        $this->Task1 = $Task1;

        return $this;
    }

    public function getTask2(): ?int
    {
        return $this->Task2;
    }

    public function setTask2(?int $Task2): self
    {
        $this->Task2 = $Task2;

        return $this;
    }

    public function getTask3(): ?int
    {
        return $this->Task3;
    }

    public function setTask3(?int $Task3): self
    {
        $this->Task3 = $Task3;

        return $this;
    }

    public function getTask4(): ?int
    {
        return $this->Task4;
    }

    public function setTask4(?int $Task4): self
    {
        $this->Task4 = $Task4;

        return $this;
    }

    public function getTask5(): ?int
    {
        return $this->Task5;
    }

    public function setTask5(?int $Task5): self
    {
        $this->Task5 = $Task5;

        return $this;
    }

    public function getTask6(): ?int
    {
        return $this->Task6;
    }

    public function setTask6(?int $Task6): self
    {
        $this->Task6 = $Task6;

        return $this;
    }

    public function getTask7(): ?int
    {
        return $this->Task7;
    }

    public function setTask7(?int $Task7): self
    {
        $this->Task7 = $Task7;

        return $this;
    }

    public function getTask8(): ?int
    {
        return $this->Task8;
    }

    public function setTask8(?int $Task8): self
    {
        $this->Task8 = $Task8;

        return $this;
    }

    public function getTask9(): ?int
    {
        return $this->Task9;
    }

    public function setTask9(?int $Task9): self
    {
        $this->Task9 = $Task9;

        return $this;
    }

    public function getTask10(): ?int
    {
        return $this->Task10;
    }

    public function setTask10(?int $Task10): self
    {
        $this->Task10 = $Task10;

        return $this;
    }
}
