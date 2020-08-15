<?php

namespace DesignPattern\J2eePattern\InterceptingFilter;

class Client
{
    private $filterManager;

    public function setFilterManager($filterManager)
    {
        $this->filterManager = $filterManager;
    }

    public function sendRequest($request)
    {
        $this->filterManager->filterRequest($request);
    }
}
