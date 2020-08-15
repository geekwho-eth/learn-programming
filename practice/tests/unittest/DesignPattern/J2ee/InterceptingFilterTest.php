<?php

/**
 * 拦截过滤器模式 测试用例
 */
class InterceptingFilterTest extends \PHPUnit\Framework\TestCase
{
    public function testInterceptingFilter()
    {
        $this->expectOutputString("Authenticating request: HOMErequest log: HOMEExecuting request: HOME");
        $interceptingFilter = new \DesignPattern\J2eePattern\InterceptingFilter\InterceptingFilterDemo();
        $interceptingFilter->run();
    }
}
