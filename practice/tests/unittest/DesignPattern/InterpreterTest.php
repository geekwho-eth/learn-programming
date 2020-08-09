<?php
/**
 *  解释器模式 测试用例
 */
class Interpreter extends \PHPUnit\Framework\TestCase
{
    public function testFlyWeight()
    {
        $this->expectOutputString("john is male ? 0 Julie is a married women? 1");
        $interpreter = new \DesignPattern\Interpreter\InterpreterPatternDemo();
        $interpreter->run();
    }
}
