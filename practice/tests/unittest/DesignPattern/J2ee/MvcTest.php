<?php
/**
 * Mvc模式 测试用例
 */
class MvcTest extends \PHPUnit\Framework\TestCase
{
    public function testMvc()
    {
        $this->expectOutputString("Student: Name: RobertRoll No: 10Student: Name: JohnRoll No: 10");
        $mvc = new \DesignPattern\J2eePattern\Mvc\MVCPatternDemo();
        $mvc->run();
    }
}
