<?php

namespace DesignPattern\J2eePattern\ServiceLocator;

class ServiceLocatorPatternDemo
{
    public function run()
    {
        $service = ServiceLocator::getService("Service1");
        $service->execute();
        $service = ServiceLocator::getService("Service2");
        $service->execute();
        $service = ServiceLocator::getService("Service1");
        $service->execute();
        $service = ServiceLocator::getService("Service2");
        $service->execute();
    }
}
