<?php

namespace DesignPattern\FlyWeight;

class Circle implements IShape
{
    private $color;
    private $x;
    private $y;
    private $radius;

    public function __construct($color)
    {
        $this->color = $color;
    }

    public function setX($x)
    {
        $this->x = $x;
    }

    public function setY($y)
    {
        $this->y = $y;
    }
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function draw()
    {
        echo "Inside Circle::draw() method. color {$this->color} x {$this->x} y {$this->y} radius {$this->radius} ";
    }
}
