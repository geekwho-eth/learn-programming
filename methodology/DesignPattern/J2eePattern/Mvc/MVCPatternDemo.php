<?php

namespace DesignPattern\J2eePattern\Mvc;

class MVCPatternDemo
{
    public function run()
    {
        $model      = $this->retrieveStudentFromDatabase();
        $view       = new StudentView();
        $controller = new StudentController($model, $view);
        $controller->updateView();

        $controller->setStudentName("John");
        $controller->updateView();
    }

    public function retrieveStudentFromDatabase()
    {
        $student = new Student();
        $student->setName("Robert");
        $student->setRollNo("10");
        return $student;
    }
}
