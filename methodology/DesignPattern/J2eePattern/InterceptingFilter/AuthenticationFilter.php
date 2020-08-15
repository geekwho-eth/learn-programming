<?php

namespace DesignPattern\J2eePattern\InterceptingFilter;

class AuthenticationFilter implements IFilter
{
    public function execute($request)
    {
        echo "Authenticating request: " . $request;
    }
}
