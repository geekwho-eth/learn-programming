<?php

namespace DesignPattern\J2eePattern\BusinessDelegate;

class BusinessDelegatePatternDemo
{
    public function run()
    {
        $businessDelegate = new BusinessDelegate();
        $businessDelegate->setServiceType("EJB");
        $client = new Client($businessDelegate);
        $client->doTask();

        $businessDelegate->setServiceType("JMS");
        $client->doTask();
    }
}
