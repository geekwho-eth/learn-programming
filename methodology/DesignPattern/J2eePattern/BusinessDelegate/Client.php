<?php

namespace DesignPattern\J2eePattern\BusinessDelegate;

class Client
{
    private $businessService;

    public function __construct($businessService)
    {
        $this->businessService = $businessService;
    }
    public function setServiceType($serviceType)
    {
        $this->serviceType = $serviceType;
    }

    public function doTask()
    {
        $this->businessService->doTask();
    }
}
