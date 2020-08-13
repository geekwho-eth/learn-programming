<?php
/**
 * 空值模式 测试用例
 */
class NullTest extends \PHPUnit\Framework\TestCase
{
    public function testNull()
    {
        $this->expectOutputString("CustomersRobNot Available in Customer DatabaseNot Available in Customer DatabaseNot Available in Customer Database");
        $null = new \DesignPattern\NullObject\NullPatternDemo();
        $null->run();
    }
}
