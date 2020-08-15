<?php

namespace DesignPattern\Facade;

class Square implements IShape
{
    public function draw()
    {
        echo "Inside Square::draw() method.";
    }
}
