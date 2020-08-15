<?php

namespace DesignPattern\Facade;

/**
 * 外观模式示例
 */
class ShapeMaker
{
    public $circle    = null;
    public $rectangle = null;
    public $square    = null;
    public function __construct()
    {
        $this->circle    = new Circle();
        $this->rectangle = new Rectangle();
        $this->square    = new Square();
    }
    public function drawCircle()
    {
        $this->circle->draw();
    }

    public function drawRectangle()
    {
        $this->rectangle->draw();
    }

    public function drawSquare()
    {
        $this->square->draw();
    }
}
