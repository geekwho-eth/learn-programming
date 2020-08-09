<?php
/**
 *  享元模式 测试用例
 */
class FlyWeightTest extends \PHPUnit\Framework\TestCase
{
    public function testFlyWeight()
    {
        $this->expectOutputString("Inside Circle::draw() method. color Red x 42 y 42 radius 100 Inside Circle::draw() method. color Green x 42 y 42 radius 100 Inside Circle::draw() method. color Blue x 42 y 42 radius 100 Inside Circle::draw() method. color White x 42 y 42 radius 100 Inside Circle::draw() method. color Black x 42 y 42 radius 100 ");
        $flyWeight = new \DesignPattern\FlyWeight\FlyWeightDemo();
        $flyWeight->run();
    }
}
