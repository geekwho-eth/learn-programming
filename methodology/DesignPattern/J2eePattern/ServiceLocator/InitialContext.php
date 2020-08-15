<?php

namespace DesignPattern\J2eePattern\ServiceLocator;

class InitialContext
{
    public function lookup($serviceName)
    {
        if ($serviceName == 'Service1') {
            echo "Looking up and creating a new Service1 object";
            return new Service1();
        }
        if ($serviceName == 'Service2') {
            echo "Looking up and creating a new Service2 object";
            return new Service2();
        }
        return null;
    }
}
