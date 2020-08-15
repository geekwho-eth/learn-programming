<?php

namespace DesignPattern\J2eePattern\DataAccessObject;

interface IStudentDao
{
    public function getAllStudents();
    public function getStudent($rollNo);
    public function updateStudent($student);
    public function deleteStudent($student);
}
