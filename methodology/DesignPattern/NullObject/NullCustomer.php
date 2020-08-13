<?php

namespace DesignPattern\NullObject;

class NullCustomer
{
    public function getName()
    {
        return "Not Available in Customer Database";
    }

    public function isNil()
    {
        return true;
    }
}
