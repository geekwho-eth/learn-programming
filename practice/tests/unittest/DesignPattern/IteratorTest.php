<?php
/**
 * 迭代器模式 测试用例
 */
class IteratorTest extends \PHPUnit\Framework\TestCase
{
    public function testIterator()
    {
        $this->expectOutputString("Name : RobertName : JohnName : JulieName : Lora");
        $iterator = new \DesignPattern\Iterator\IteratorPatternDemo();
        $iterator->run();
    }
}
