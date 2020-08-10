<?php
/**
 *  命令模式 测试用例
 */
class CommandTest extends \PHPUnit\Framework\TestCase
{
    public function testCommand()
    {
        $this->expectOutputString("Stock [ Name: ABC,Quantity: 10 ] boughtStock [ Name: ABC,Quantity: 10 ] sold");
        $command = new \DesignPattern\Command\CommandPatternDemo();
        $command->run();
    }
}
