<?php

namespace STEBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Answer
 */
class Answer
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $correctForTasks;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $incorrectForTasks;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->correctForTasks = new \Doctrine\Common\Collections\ArrayCollection();
        $this->incorrectForTasks = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Answer
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
     * Add correctForTasks
     *
     * @param \STEBundle\Entity\Task $correctForTasks
     * @return Answer
     */
    public function addCorrectForTask(\STEBundle\Entity\Task $correctForTasks)
    {
        $this->correctForTasks[] = $correctForTasks;

        return $this;
    }

    /**
     * Remove correctForTasks
     *
     * @param \STEBundle\Entity\Task $correctForTasks
     */
    public function removeCorrectForTask(\STEBundle\Entity\Task $correctForTasks)
    {
        $this->correctForTasks->removeElement($correctForTasks);
    }

    /**
     * Get correctForTasks
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCorrectForTasks()
    {
        return $this->correctForTasks;
    }

    /**
     * Add incorrectForTasks
     *
     * @param \STEBundle\Entity\Task $incorrectForTasks
     * @return Answer
     */
    public function addIncorrectForTask(\STEBundle\Entity\Task $incorrectForTasks)
    {
        $this->incorrectForTasks[] = $incorrectForTasks;

        return $this;
    }

    /**
     * Remove incorrectForTasks
     *
     * @param \STEBundle\Entity\Task $incorrectForTasks
     */
    public function removeIncorrectForTask(\STEBundle\Entity\Task $incorrectForTasks)
    {
        $this->incorrectForTasks->removeElement($incorrectForTasks);
    }

    /**
     * Get incorrectForTasks
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIncorrectForTasks()
    {
        return $this->incorrectForTasks;
    }
}
