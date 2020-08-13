<?php

namespace DesignPattern\Iterator;

class NameIterator implements Iterator
{
    private $index = 0;

    public function hasNext($object)
    {
        return $this->index < count($object->getNames());
    }

    public function next($object)
    {
        if ($this->hasNext($object)) {
            $names = $object->getNames();
            return $names[$this->index++];
        }
        return null;
    }
}
