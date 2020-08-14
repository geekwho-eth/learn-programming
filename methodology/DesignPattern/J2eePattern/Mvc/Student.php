<?php

namespace DesignPattern\J2eePattern\Mvc;

class Student
{
    private $rollNo;
    private $name;
    public function getRollNo()
    {
        return $this->rollNo;
    }
    public function setRollNo($rollNo)
    {
        $this->rollNo = $rollNo;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
}
