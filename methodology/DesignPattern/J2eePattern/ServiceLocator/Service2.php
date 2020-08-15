<?php

namespace DesignPattern\J2eePattern\ServiceLocator;

class Service2 implements IService
{
    public function execute()
    {
        echo "Executing Service2";
    }

    public function getName()
    {
        return "Service2";
    }
}
