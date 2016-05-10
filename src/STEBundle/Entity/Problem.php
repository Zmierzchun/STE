<?php

namespace STEBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Problem
 */
class Problem
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
    private $name;

    /**
     * @var \STEBundle\Entity\Requirement
     */
    private $requirement;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tasks;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tasks = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Problem
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
     * Set requirement
     *
     * @param \STEBundle\Entity\Requirement $requirement
     * @return Problem
     */
    public function setRequirement(\STEBundle\Entity\Requirement $requirement = null)
    {
        $this->requirement = $requirement;

        return $this;
    }

    /**
     * Get requirement
     *
     * @return \STEBundle\Entity\Requirement 
     */
    public function getRequirement()
    {
        return $this->requirement;
    }

    /**
     * Add tasks
     *
     * @param \STEBundle\Entity\Task $tasks
     * @return Problem
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
}
