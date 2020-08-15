<?php

namespace DesignPattern\J2eePattern\CompositeEntity;

class CompositeEntity
{
    private $cgo;
    public function __construct()
    {
        $this->cgo = new CoarseGrainedObject();
    }

    public function setData($data1, $data2)
    {
        $this->cgo->setData($data1, $data2);
    }

    public function getData()
    {
        return $this->cgo->getData();
    }
}
