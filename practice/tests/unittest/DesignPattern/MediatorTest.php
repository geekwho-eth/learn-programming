<?php
/**
 * 中介者模式 测试用例
 */
class Mediator extends \PHPUnit\Framework\TestCase
{
    public function testMediator()
    {
        $time = date('Ymd H:i:s');
        $this->expectOutputString("{$time} [Robert] : Hi! John!{$time} [John] : Hello! Robert!");
        $mediator = new \DesignPattern\Mediator\MediatorPatternDemo();
        $mediator->run();
    }
}
