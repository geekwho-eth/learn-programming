<?php

namespace DesignPattern\Facade;

/**
 * 外观模式示例
 */
class FacadePatternDemo
{
    public static function run()
    {
        $shapeMaker = new ShapeMaker();
        $shapeMaker->drawCircle();
        $shapeMaker->drawRectangle();
        $shapeMaker->drawSquare();
    }
}
