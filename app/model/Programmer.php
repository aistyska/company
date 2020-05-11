<?php


namespace Company\Model;


class Programmer extends Person
{
    private $project;
    private $team;
    private $workExperience;

    /**
     * Programmer constructor.
     * @param $project
     * @param $team
     * @param $workExperience
     */
    public function __construct($name, $lastName, $email, $startDate, $position, $project, $team, $workExperience)
    {
        parent::__construct($name, $lastName, $email, $startDate, $position);
        $this->project = $project;
        $this->team = $team;
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
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * @param mixed $team
     */
    public function setTeam($team)
    {
        $this->team = $team;
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
        return "Have a good day! \n" . $this->getProject() . "\n" . $this->getPosition() . " in " . $this->team .  " team,\n" . $this->getName() . " " . $this->getLastName() . "\n" . $this->getEmail();
    }

    public static function getProgrammerJoke() {
        return "Why do programmers prefer dark mode? \nCause light attracts bugs.";
    }
}