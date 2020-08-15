<?php
/**
 * 前端控制器模式 测试用例
 */
class FrontControllerTest extends \PHPUnit\Framework\TestCase
{
    public function testFrontController()
    {
        $this->expectOutputString("Page requested: HOMEUser is authenticated successfully.Displaying Home PagePage requested: STUDENTUser is authenticated successfully.Displaying Student Page");
        $frontController = new \DesignPattern\J2eePattern\FrontController\FrontControllerPatternDemo();
        $frontController->run();
    }
}
