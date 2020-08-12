<?php
/**
 * 备忘录模式 测试用例
 */
class Memento extends \PHPUnit\Framework\TestCase
{
    public function testMemento()
    {
        $this->expectOutputString("Current State: State #4First saved State: State #2Second saved State: State #3");
        $memento = new \DesignPattern\Memento\MementoPatternDemo();
        $memento->run();
    }
}
