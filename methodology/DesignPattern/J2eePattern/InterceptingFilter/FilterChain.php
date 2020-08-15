<?php

namespace DesignPattern\J2eePattern\InterceptingFilter;

class FilterChain
{
    private $filters = [];
    private $target;

    public function addFilter($filter)
    {
        $this->filters[] = $filter;
    }

    public function execute($request)
    {
        foreach ($this->filters as $filter) {
            $filter->execute($request);
        }
        $this->target->execute($request);
    }
    public function setTarget($target)
    {
        $this->target = $target;
    }
}
