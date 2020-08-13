<?php

namespace DesignPattern\Iterator;

interface Iterator
{
    public function hasNext($object);
    public function next($object);
}
