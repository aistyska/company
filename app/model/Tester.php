<?php


namespace Company\Model;


class Tester extends Person
{
    private $project;
    private $teamLead;
    private $workExperience;

    /**
     * Tester constructor.
     * @param $project
     * @param $teamLead
     * @param $workExperience
     */
    public function __construct($name, $lastName, $email, $startDate, $position, $project, $teamLead, $workExperience)
    {
        parent::__construct($name, $lastName, $email, $startDate, $position);
        $this->project = $project;
        $this->teamLead = $teamLead;
        $this->workExperience = $workExperience;
    }

    /**
     * @return mixed
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * @param mixed $project
     */
    public function setProject($project)
    {
        $this->project = $project;
    }

    /**
     * @return mixed
     */
    public function getTeamLead()
    {
        return $this->teamLead;
    }

    /**
     * @param mixed $teamLead
     */
    public function setTeamLead($teamLead)
    {
        $this->teamLead = $teamLead;
    }

    /**
     * @return mixed
     */
    public function getWorkExperience()
    {
        return $this->workExperience;
    }

    /**
     * @param mixed $workExperience
     */
    public function setWorkExperience($workExperience)
    {
        $this->workExperience = $workExperience;
    }



    public function getSignature()
    {
        return "I trust, but check! \n" .$this->getPosition() . " in " . $this->project . ",\n" . $this->getName() . " " . $this->getLastName() . "\n" . $this->getEmail();
    }
}