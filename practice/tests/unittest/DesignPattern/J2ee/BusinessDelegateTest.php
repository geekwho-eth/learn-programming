<?php
/**
 * 业务代表模式 测试用例
 */
class BusinessDelegateTest extends \PHPUnit\Framework\TestCase
{
    public function testBusinessDelegate()
    {
        $this->expectOutputString("Processing task by invoking EJB ServiceProcessing task by invoking JMS Service");
        $businessDelegate = new \DesignPattern\J2eePattern\BusinessDelegate\BusinessDelegatePatternDemo();
        $businessDelegate->run();
    }
}
