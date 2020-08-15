<?php
/**
 * 业务代表模式 测试用例
 */
class ServiceLocatorTest extends \PHPUnit\Framework\TestCase
{
    public function testServiceLocator()
    {
        $this->expectOutputString("Looking up and creating a new Service1 objectExecuting Service1Looking up and creating a new Service2 objectExecuting Service2Returning cached  Service1 objectExecuting Service1Returning cached  Service2 objectExecuting Service2");
        $serviceLocator = new \DesignPattern\J2eePattern\ServiceLocator\ServiceLocatorPatternDemo();
        $serviceLocator->run();
    }
}
