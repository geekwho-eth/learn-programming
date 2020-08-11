<?php
/**
 *  命令模式 测试用例
 */
class ChainOfResponsibilityTest extends \PHPUnit\Framework\TestCase
{
    public function testChainOfResponsibility()
    {
        $this->expectOutputString("Standard Console::Logger: This is a debug level information.File Console::Logger: This is an error information.Standard Console::Logger: This is an error information.");
        $chain = new \DesignPattern\ChainOfResponsibility\ChainPatternDemo();
        $chain->run();
    }
}
