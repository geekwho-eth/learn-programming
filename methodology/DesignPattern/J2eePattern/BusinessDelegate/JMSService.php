<?php

namespace DesignPattern\J2eePattern\BusinessDelegate;

class JMSService implements IBusinessService
{
    public function doProcessing()
    {
        echo "Processing task by invoking JMS Service";
    }
}
