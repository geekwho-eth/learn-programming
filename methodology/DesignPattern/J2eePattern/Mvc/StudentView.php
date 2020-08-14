<?php

namespace DesignPattern\J2eePattern\Mvc;

class StudentView
{
    public function printStudentDetails($studentName, $studentRollNo)
    {
        echo "Student: ";
        echo "Name: " . $studentName;
        echo "Roll No: " . $studentRollNo;
    }
}
