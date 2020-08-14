<?php
/**
 * 访问者模式 测试用例
 */
class VisitorTest extends \PHPUnit\Framework\TestCase
{
    public function testVisitor()
    {
        $this->expectOutputString("Displaying MouseDisplaying KeyboardDisplaying MonitorDisplaying Computer");
        $visitor = new \DesignPattern\Visitor\VisitorPatternDemo();
        $visitor->run();
    }
}
