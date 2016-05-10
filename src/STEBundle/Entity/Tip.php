<?php

namespace STEBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tip
 */
class Tip
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
    private $content;

    /**
     * @var integer
     */
    private $scoreCost;

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
     * Set content
     *
     * @param string $content
     * @return Tip
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set scoreCost
     *
     * @param integer $scoreCost
     * @return Tip
     */
    public function setScoreCost($scoreCost)
    {
        $this->scoreCost = $scoreCost;

        return $this;
    }

    /**
     * Get scoreCost
     *
     * @return integer 
     */
    public function getScoreCost()
    {
        return $this->scoreCost;
    }

    /**
     * Add tasks
     *
     * @param \STEBundle\Entity\Task $tasks
     * @return Tip
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
