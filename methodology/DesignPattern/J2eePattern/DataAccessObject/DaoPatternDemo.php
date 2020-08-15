<?php

namespace DesignPattern\J2eePattern\DataAccessObject;

class DaoPatternDemo
{
    public function run()
    {
        $studentDao = new StudentDaoImpl();
        foreach ($studentDao->getAllStudents() as $student) {
            echo "Student: [RollNo : "
            . $student->getRollNo() . ", Name : " . $student->getName() . " ]";
        }

        $student = $studentDao->getAllStudents()[0];
        $student->setName("Michael");
        $studentDao->updateStudent($student);

        $studentDao->getStudent(0);

        echo "Student: [RollNo : "
            . $student->getRollNo() . ", Name : " . $student->getName() . " ]";
    }
}
