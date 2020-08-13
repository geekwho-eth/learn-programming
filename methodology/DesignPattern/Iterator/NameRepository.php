<?php

namespace DesignPattern\Iterator;

class NameRepository implements Container
{
    private $names = [
        "Robert", "John", "Julie", "Lora"
    ];

    public function getIterator()
    {
        return new NameIterator();
    }

    public function getNames()
    {
        return $this->names;
    }
}
