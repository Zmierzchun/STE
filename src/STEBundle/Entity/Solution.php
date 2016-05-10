<?php

namespace STEBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Solution
 */
class Solution
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
     * @var \STEBundle\Entity\Task
     */
    private $task;


    /**
     * Set content
     *
     * @param string $content
     * @return Solution
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
     * Set task
     *
     * @param \STEBundle\Entity\Task $task
     * @return Solution
     */
    public function setTask(\STEBundle\Entity\Task $task = null)
    {
        $this->task = $task;

        return $this;
    }

    /**
     * Get task
     *
     * @return \STEBundle\Entity\Task 
     */
    public function getTask()
    {
        return $this->task;
    }
}
