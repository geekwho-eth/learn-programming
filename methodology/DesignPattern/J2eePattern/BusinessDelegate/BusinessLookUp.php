<?php

namespace DesignPattern\J2eePattern\BusinessDelegate;

class BusinessLookUp
{
    public function getBusinessService($serviceType)
    {
        if ($serviceType == "EJB") {
            return new EJBService();
        } else {
            return new JMSService();
        }
    }
}
