<?php

namespace DesignPattern\J2eePattern\InterceptingFilter;

class DebugFilter implements IFilter
{
    public function execute($request)
    {
        echo "request log: " . $request;
    }
}
