<?php

namespace DesignPattern\J2eePattern\BusinessDelegate;

class BusinessDelegate
{
    private $lookupService;
    private $businessService;
    private $serviceType;

    public function __construct()
    {
        $this->lookupService = new BusinessLookUp();
    }
    public function setServiceType($serviceType)
    {
        $this->serviceType = $serviceType;
    }

    public function doTask()
    {
        $this->businessService = $this->lookupService->getBusinessService($this->serviceType);
        $this->businessService->doProcessing();
    }
}
