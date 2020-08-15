<?php

namespace DesignPattern\J2eePattern\TransferObject;

class StudentBO
{
    private $students = [];

    public function __construct()
    {
        $student1                               = new StudentVO("Robert", 0);
        $student2                               = new StudentVO("John", 1);
        $this->students[$student1->getRollNo()] = $student1;
        $this->students[$student2->getRollNo()] = $student2;
    }

    public function deleteStudent($student)
    {
        unset($this->students[$student->getRollNo()]);
        echo "Student: Roll No " . $student->getRollNo()
            . ", deleted from database";
    }

    public function getAllStudents()
    {
        return $this->students;
    }

    public function getStudent($rollNo)
    {
        return $this->students[$rollNo] ?? '';
    }

    public function updateStudent($student)
    {
        $findStudent = $this->students[$student->getRollNo()] ?? '';
        if ($findStudent) {
            $findStudent->setName($student->getName());
            echo "Student: Roll No " . $student->getRollNo()
                . ", updated in the database";
        }
    }
}
