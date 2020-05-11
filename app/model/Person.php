<?php

namespace Company\Model;

abstract class Person
{
    private $name;
    private $lastName;
    private $email;
    private $startDate;
    private $position;

    /**
     * Person constructor.
     * @param $name
     * @param $lastName
     * @param $email
     * @param $startDate
     * @param $position
     */
    public function __construct($name, $lastName, $email, $startDate, $position)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->startDate = $startDate;
        $this->position = $position;
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param mixed $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }


    abstract public function getSignature();
}