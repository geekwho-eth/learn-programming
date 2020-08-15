<?php

namespace DesignPattern\FlyWeight;

/**
 * 享元模式示例
 */
class FlyWeightDemo
{
    private $colors = [
        "Red",
        "Green",
        "Blue",
        "White",
        "Black"
    ];
    public function run()
    {
        foreach ($this->colors as $key => $color) {
            $circle = (new ShapeFactory)->getCircle($color);
            $circle->setX(42);
            $circle->setY(42);
            $circle->setRadius(100);
            $circle->draw();
        }
    }

    private function getRandomColor()
    {
        return $this->colors[array_rand($this->colors)];
    }

    private function getRandomX()
    {
        return mt_rand(1, 100);
    }

    private function getRandomY()
    {
        return mt_rand(1, 100);
    }
}
