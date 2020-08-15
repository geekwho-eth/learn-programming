<?php

namespace DesignPattern\J2eePattern\Mvc;

class StudentController
{
    private $model;
    private $view;

    public function __construct($model, $view)
    {
        $this->model = $model;
        $this->view  = $view;
    }
    public function setStudentName($name)
    {
        $this->model->setName($name);
    }

    public function getStudentName()
    {
        return $this->model->getName();
    }

    public function setStudentRollNo($rollNo)
    {
        $this->model->setRollNo($rollNo);
    }

    public function getStudentRollNo()
    {
        return $this->model->getRollNo();
    }

    public function updateView()
    {
        $this->view->printStudentDetails($this->model->getName(), $this->model->getRollNo());
    }
}
