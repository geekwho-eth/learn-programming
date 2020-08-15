<?php

namespace DesignPattern\J2eePattern\FrontController;

class Dispatcher
{
    private $studentView;
    private $homeView;

    public function __construct()
    {
        $this->studentView = new StudentView();
        $this->homeView    = new HomeView();
    }

    public function dispatch($request)
    {
        if ($request == 'STUDENT') {
            $this->studentView->show();
        } else {
            $this->homeView->show();
        }
    }
}
