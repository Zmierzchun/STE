<?php

namespace STEBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Requirement
 */
class Requirement
{
    /**
     * @var int
     */
    private $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @var string
     */
    private $abbreviation;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tasks;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $problems;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tasks = new \Doctrine\Common\Collections\ArrayCollection();
        $this->problems = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set abbreviation
     *
     * @param string $abbreviation
     * @return Requirement
     */
    public function setAbbreviation($abbreviation)
    {
        $this->abbreviation = $abbreviation;

        return $this;
    }

    /**
     * Get abbreviation
     *
     * @return string 
     */
    public function getAbbreviation()
    {
        return $this->abbreviation;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Requirement
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Requirement
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add tasks
     *
     * @param \STEBundle\Entity\Task $tasks
     * @return Requirement
     */
    public function addTask(\STEBundle\Entity\Task $tasks)
    {
        $this->tasks[] = $tasks;

        return $this;
    }

    /**
     * Remove tasks
     *
     * @param \STEBundle\Entity\Task $tasks
     */
    public function removeTask(\STEBundle\Entity\Task $tasks)
    {
        $this->tasks->removeElement($tasks);
    }

    /**
     * Get tasks
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTasks()
    {
        return $this->tasks;
    }

    /**
     * Add problems
     *
     * @param \STEBundle\Entity\Problem $problems
     * @return Requirement
     */
    public function addProblem(\STEBundle\Entity\Problem $problems)
    {
        $this->problems[] = $problems;

        return $this;
    }

    /**
     * Remove problems
     *
     * @param \STEBundle\Entity\Problem $problems
     */
    public function removeProblem(\STEBundle\Entity\Problem $problems)
    {
        $this->problems->removeElement($problems);
    }

    /**
     * Get problems
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProblems()
    {
        return $this->problems;
    }
}
