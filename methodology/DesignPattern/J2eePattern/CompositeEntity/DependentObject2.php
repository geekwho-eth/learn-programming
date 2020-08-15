<?php

namespace DesignPattern\J2eePattern\CompositeEntity;

class DependentObject2
{
    private $data;

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}
