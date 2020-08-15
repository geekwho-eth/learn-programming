<?php

namespace DesignPattern\Composite;

/**
 * 员工类
 */
class Employee
{
    private $name;
    private $dept;
    private $salary;
    private $list = [];
    public function __construct($name, $dept, $salary)
    {
        $this->name   = $name;
        $this->dept   = $dept;
        $this->salary = $salary ;
    }

    public function add($e)
    {
        $this->list[] = $e;
    }

    public function remove($e)
    {
        array_shift($this->list);
    }

    public function getList()
    {
        return $this->list;
    }

    public function __toString()
    {
        return "Employee :[ Name : " . $this->name
            . ", dept : " . $this->dept . ", salary :"
            . $this->salary . " ]";
    }
}
