<?php

namespace DesignPattern\Facade;

class Rectangle implements IShape
{
    public function draw()
    {
        echo "Inside Rectangle::draw() method.";
    }
}
