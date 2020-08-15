<?php

namespace DesignPattern\J2eePattern\InterceptingFilter;

class FilterManager
{
    private $filterChain = [];

    public function __construct($target)
    {
        $this->filterChain = new FilterChain();
        $this->filterChain->setTarget($target);
    }

    public function setFilter($filter)
    {
        $this->filterChain->addFilter($filter);
    }
    public function filterRequest($request)
    {
        $this->filterChain->execute($request);
    }
}
