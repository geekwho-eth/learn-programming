<?php

namespace DesignPattern\Memento;

class CareTaker
{
    private $mementoList = [];

    public function add($state)
    {
        $this->mementoList[] = ($state);
    }

    public function get($index)
    {
        return $this->mementoList[$index];
    }
}
