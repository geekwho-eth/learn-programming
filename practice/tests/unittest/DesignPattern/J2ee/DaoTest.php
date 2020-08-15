<?php
/**
 * 数据访问对象模式 测试用例
 */
class DaoTest extends \PHPUnit\Framework\TestCase
{
    public function testDao()
    {
        $this->expectOutputString("Student: [RollNo : 0, Name : Robert ]Student: [RollNo : 1, Name : John ]Student: Roll No 0, updated in the databaseStudent: [RollNo : 0, Name : Michael ]");
        $dao = new \DesignPattern\J2eePattern\DataAccessObject\DaoPatternDemo();
        $dao->run();
    }
}
