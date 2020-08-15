<?php

namespace DesignPattern\J2eePattern\CompositeEntity;

class Client
{
    private $compositeEntity;
    public function __construct()
    {
        $this->compositeEntity = new CompositeEntity();
    }

    public function printData()
    {
        foreach ($this->compositeEntity->getData() as $data) {
            echo $data;
        }
    }

    public function setData($data1, $data2)
    {
        return $this->compositeEntity->setData($data1, $data2);
    }
}
