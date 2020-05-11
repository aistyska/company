<?php


namespace Company\Model;


class Manager extends Person
{
    private $phone;
    private $department;

    /**
     * Manager constructor.
     * @param $phone
     * @param $department
     */
    public function __construct($name, $lastName, $email, $startDate, $position, $phone, $department)
    {
        parent::__construct($name, $lastName, $email, $startDate, $position);
        $this->phone = $phone;
        $this->department = $department;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * @param mixed $department
     */
    public function setDepartment($department)
    {
        $this->department = $department;
    }



    public function getSignature()
    {
        return "Have a good day! \n" .$this->getPosition() . " in " . $this->department . ",\n" . $this->getName() . " " . $this->getLastName() . "\n" . $this->getEmail() . "\n" . $this->phone;
    }
}