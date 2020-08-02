<?php
/**
 *  外观模式 测试用例
 */
class FacadeTest extends \PHPUnit\Framework\TestCase
{
    /**
     * 执行测试
     */
    public function testFacade()
    {
        $instance = new \DesignPattern\Facade\FacadePatternDemo();
        $this->expectOutputString('Inside Circle::draw() method.Inside Rectangle::draw() method.Inside Square::draw() method.');
        $instance->run();
    }
}
