<?php

namespace DesignPattern\J2eePattern\InterceptingFilter;

class InterceptingFilterDemo
{
    public function run()
    {
        $filterManager = new FilterManager(new Target);
        $filterManager->setFilter(new AuthenticationFilter);
        $filterManager->setFilter(new DebugFilter);

        $client = new Client();
        $client->setFilterManager($filterManager);
        $client->sendRequest('HOME');
    }
}
