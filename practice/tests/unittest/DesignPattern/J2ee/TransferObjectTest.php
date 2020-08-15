<?php
/**
 * 传输模式 测试用例
 */
class TransferObjectTest extends \PHPUnit\Framework\TestCase
{
    public function testTransferObject()
    {
        $this->expectOutputString("Student: [RollNo : 0, Name : Robert ]Student: [RollNo : 1, Name : John ]Student: Roll No 0, updated in the databaseStudent: [RollNo : 0, Name : Michael ]");
        $transferObject = new \DesignPattern\J2eePattern\TransferObject\TransferObjectPatternDemo();
        $transferObject->run();
    }
}
