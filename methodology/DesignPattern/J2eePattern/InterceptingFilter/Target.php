<?php

namespace DesignPattern\J2eePattern\InterceptingFilter;

class Target
{
    public function execute($request)
    {
        echo "Executing request: " . $request;
    }
}
