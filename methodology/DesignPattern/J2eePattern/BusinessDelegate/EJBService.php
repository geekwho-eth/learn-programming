<?php

namespace DesignPattern\J2eePattern\BusinessDelegate;

class EJBService implements IBusinessService
{
    public function doProcessing()
    {
        echo "Processing task by invoking EJB Service";
    }
}
