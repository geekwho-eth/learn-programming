<?php
/**
 *  代理模式 测试用例
 */
class ProxyTest extends \PHPUnit\Framework\TestCase
{
    /**
     * 执行测试
     */
    public function testProxy()
    {
        $instance = new \DesignPattern\Proxy\ProxyPatternDemo();
        $this->expectOutputString('Loading test_image.pngDisplaying test_image.pngDisplaying test_image.png');
        $instance->run();
    }
}
