<?php

namespace DesignPattern\NullObject;

abstract class AbstractCustomer
{
    protected $name;
    abstract public function isNil();
    abstract public function getName();
}
