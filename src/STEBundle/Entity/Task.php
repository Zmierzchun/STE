<?php

namespace STEBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Task
 */
class Task
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $solution;


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
     * Set content
     *
     * @param string $content
     * @return Task
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
     * Set solution
     *
     * @param string $solution
     * @return Task
     */
    public function setSolution($solution)
    {
        $this->solution = $solution;

        return $this;
    }

    /**
     * Get solution
     *
     * @return string 
     */
    public function getSolution()
    {
        return $this->solution;
    }
    /**
     * @var integer
     */
    private $scoring;

    /**
     * @var \DateTime
     */
    private $timeConsumption;

    /**
     * @var \STEBundle\Entity\Requirement
     */
    private $requirement;

    /**
     * @var \STEBundle\Entity\TaskType
     */
    private $taskType;

    /**
     * @var \STEBundle\Entity\Command
     */
    private $command;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $aims;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $problemsChecked;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tips;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $correctAnswers;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $incorrectAnswers;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->aims = new \Doctrine\Common\Collections\ArrayCollection();
        $this->problemsChecked = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tips = new \Doctrine\Common\Collections\ArrayCollection();
        $this->correctAnswers = new \Doctrine\Common\Collections\ArrayCollection();
        $this->incorrectAnswers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set scoring
     *
     * @param integer $scoring
     * @return Task
     */
    public function setScoring($scoring)
    {
        $this->scoring = $scoring;

        return $this;
    }

    /**
     * Get scoring
     *
     * @return integer 
     */
    public function getScoring()
    {
        return $this->scoring;
    }

    /**
     * Set timeConsumption
     *
     * @param \DateTime $timeConsumption
     * @return Task
     */
    public function setTimeConsumption($timeConsumption)
    {
        $this->timeConsumption = $timeConsumption;

        return $this;
    }

    /**
     * Get timeConsumption
     *
     * @return \DateTime 
     */
    public function getTimeConsumption()
    {
        return $this->timeConsumption;
    }

    /**
     * Set requirement
     *
     * @param \STEBundle\Entity\Requirement $requirement
     * @return Task
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
     * Set taskType
     *
     * @param \STEBundle\Entity\TaskType $taskType
     * @return Task
     */
    public function setTaskType(\STEBundle\Entity\TaskType $taskType = null)
    {
        $this->taskType = $taskType;

        return $this;
    }

    /**
     * Get taskType
     *
     * @return \STEBundle\Entity\TaskType 
     */
    public function getTaskType()
    {
        return $this->taskType;
    }

    /**
     * Set command
     *
     * @param \STEBundle\Entity\Command $command
     * @return Task
     */
    public function setCommand(\STEBundle\Entity\Command $command = null)
    {
        $this->command = $command;

        return $this;
    }

    /**
     * Get command
     *
     * @return \STEBundle\Entity\Command 
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * Add aims
     *
     * @param \STEBundle\Entity\Aim $aims
     * @return Task
     */
    public function addAim(\STEBundle\Entity\Aim $aims)
    {
        $this->aims[] = $aims;

        return $this;
    }

    /**
     * Remove aims
     *
     * @param \STEBundle\Entity\Aim $aims
     */
    public function removeAim(\STEBundle\Entity\Aim $aims)
    {
        $this->aims->removeElement($aims);
    }

    /**
     * Get aims
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAims()
    {
        return $this->aims;
    }

    /**
     * Add problemsChecked
     *
     * @param \STEBundle\Entity\Problem $problemsChecked
     * @return Task
     */
    public function addProblemsChecked(\STEBundle\Entity\Problem $problemsChecked)
    {
        $this->problemsChecked[] = $problemsChecked;

        return $this;
    }

    /**
     * Remove problemsChecked
     *
     * @param \STEBundle\Entity\Problem $problemsChecked
     */
    public function removeProblemsChecked(\STEBundle\Entity\Problem $problemsChecked)
    {
        $this->problemsChecked->removeElement($problemsChecked);
    }

    /**
     * Get problemsChecked
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProblemsChecked()
    {
        return $this->problemsChecked;
    }

    /**
     * Add tips
     *
     * @param \STEBundle\Entity\Tip $tips
     * @return Task
     */
    public function addTip(\STEBundle\Entity\Tip $tips)
    {
        $this->tips[] = $tips;

        return $this;
    }

    /**
     * Remove tips
     *
     * @param \STEBundle\Entity\Tip $tips
     */
    public function removeTip(\STEBundle\Entity\Tip $tips)
    {
        $this->tips->removeElement($tips);
    }

    /**
     * Get tips
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTips()
    {
        return $this->tips;
    }

    /**
     * Add correctAnswers
     *
     * @param \STEBundle\Entity\Answer $correctAnswers
     * @return Task
     */
    public function addCorrectAnswer(\STEBundle\Entity\Answer $correctAnswers)
    {
        $this->correctAnswers[] = $correctAnswers;

        return $this;
    }

    /**
     * Remove correctAnswers
     *
     * @param \STEBundle\Entity\Answer $correctAnswers
     */
    public function removeCorrectAnswer(\STEBundle\Entity\Answer $correctAnswers)
    {
        $this->correctAnswers->removeElement($correctAnswers);
    }

    /**
     * Get correctAnswers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCorrectAnswers()
    {
        return $this->correctAnswers;
    }

    /**
     * Add incorrectAnswers
     *
     * @param \STEBundle\Entity\Answer $incorrectAnswers
     * @return Task
     */
    public function addIncorrectAnswer(\STEBundle\Entity\Answer $incorrectAnswers)
    {
        $this->incorrectAnswers[] = $incorrectAnswers;

        return $this;
    }

    /**
     * Remove incorrectAnswers
     *
     * @param \STEBundle\Entity\Answer $incorrectAnswers
     */
    public function removeIncorrectAnswer(\STEBundle\Entity\Answer $incorrectAnswers)
    {
        $this->incorrectAnswers->removeElement($incorrectAnswers);
    }

    /**
     * Get incorrectAnswers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIncorrectAnswers()
    {
        return $this->incorrectAnswers;
    }
}
