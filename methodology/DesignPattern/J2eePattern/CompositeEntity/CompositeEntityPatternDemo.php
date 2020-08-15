<?php

namespace DesignPattern\J2eePattern\CompositeEntity;

class CompositeEntityPatternDemo
{
    public function run()
    {
        $client = new Client();
        $client->setData("Test", "Data");
        $client->printData();
        $client->setData("Second Test", "Data1");
        $client->printData();
    }
}
