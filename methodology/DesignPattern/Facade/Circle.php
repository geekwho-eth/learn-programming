<?php

namespace DesignPattern\Facade;

class Circle implements IShape
{
    public function draw()
    {
        echo "Inside Circle::draw() method.";
    }
}
