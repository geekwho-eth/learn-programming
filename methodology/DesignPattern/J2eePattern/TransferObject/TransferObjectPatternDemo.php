<?php

namespace DesignPattern\J2eePattern\TransferObject;

class TransferObjectPatternDemo
{
    public function run()
    {
        $businessObject = new StudentBO();
        foreach ($businessObject->getAllStudents() as $student) {
            echo "Student: [RollNo : "
            . $student->getRollNo() . ", Name : " . $student->getName() . " ]";
        }

        $student = $businessObject->getAllStudents()[0];
        $student->setName("Michael");
        $businessObject->updateStudent($student);

        $businessObject->getStudent(0);

        echo "Student: [RollNo : "
        . $student->getRollNo() . ", Name : " . $student->getName() . " ]";
    }
}
