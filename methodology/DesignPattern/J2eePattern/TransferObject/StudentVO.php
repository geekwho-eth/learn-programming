<?php

namespace DesignPattern\J2eePattern\TransferObject;

class StudentVO
{
    private $rollNo;
    private $name;
    public function __construct($name, $rollNo)
    {
        $this->name   = $name;
        $this->rollNo = $rollNo;
    }
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
