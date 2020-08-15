<?php

namespace DesignPattern\J2eePattern\ServiceLocator;

class Service1 implements IService
{
    public function execute()
    {
        echo "Executing Service1";
    }

    public function getName()
    {
        return "Service1";
    }
}
