<?php

namespace DesignPattern\J2eePattern\FrontController;

class FrontController
{
    private $dispatcher;

    public function __construct()
    {
        $this->dispatcher = new Dispatcher();
    }

    public function isAuthenticUser()
    {
        echo "User is authenticated successfully.";
        return true;
    }

    public function trackRequest($request)
    {
        echo "Page requested: " . $request;
    }

    public function dispatchRequest($request)
    {
        $this->trackRequest($request);
        if ($this->isAuthenticUser()) {
            $this->dispatcher->dispatch($request);
        }
    }
}
