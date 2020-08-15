<?php

namespace DesignPattern\J2eePattern\ServiceLocator;

class Cache
{
    private $services = [];
    public function __construct()
    {
    }

    public function getService($serviceName)
    {
        $service = $this->services[$serviceName] ?? null;
        if ($service) {
            echo "Returning cached  " . $serviceName . " object";
        }
        return $service;
    }

    public function addService($newService)
    {
        $serviceName = $newService->getName();
        $service     = $this->services[$serviceName] ?? null;
        if ($service === null) {
            $this->services[$serviceName] = $newService;
        }
    }
}
