<?php
/**
 *  组合模式 测试用例
 */
class CompositeTest extends \PHPUnit\Framework\TestCase
{
    /**
     * 执行测试
     */
    public function testComposite()
    {
        // 获取单例
        $instance = new \DesignPattern\Composite\CompositePatternDemo();
        $this->expectOutputString('Employee :[ Name : John, dept : CEO, salary :30000 ]Employee :[ Name : Robert, dept : Head Sales, salary :20000 ]Employee :[ Name : Richard, dept : Sales, salary :10000 ]Employee :[ Name : Rob, dept : Sales, salary :10000 ]Employee :[ Name : Michel, dept : Head Marketing, salary :20000 ]Employee :[ Name : Laura, dept : Marketing, salary :10000 ]Employee :[ Name : Bob, dept : Marketing, salary :10000 ]');
        $instance->run();
    }
}
