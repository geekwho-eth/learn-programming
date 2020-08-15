<?php

namespace DesignPattern\FlyWeight;

/**
 * 享元模式示例
 */
class ShapeFactory
{
    public $circleMap = [];
    public function getCircle($color)
    {
        $circle = $this->circleMap[$color] ?? null;
        if ($circle === null) {
            $circle                  = new Circle($color);
            $this->circleMap[$color] = $circle;
        }
        return $circle;
    }
}
