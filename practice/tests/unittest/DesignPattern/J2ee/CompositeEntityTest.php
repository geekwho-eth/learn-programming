<?php
/**
 * 组合实体模式 测试用例
 */
class CompositeEntityTest extends \PHPUnit\Framework\TestCase
{
    public function testCompositeEntity()
    {
        $this->expectOutputString("TestDataSecond TestData1");
        $compositeEntity = new \DesignPattern\J2eePattern\CompositeEntity\CompositeEntityPatternDemo();
        $compositeEntity->run();
    }
}
