<?php

namespace DesignPattern\NullObject;

class RealCustomer extends AbstractCustomer
{
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }

    public function isNil()
    {
        return false;
    }
}
