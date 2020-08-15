<?php

namespace DesignPattern\J2eePattern\ServiceLocator;

class ServiceLocator
{
    private static $cache;
    public function __construct()
    {
    }

    public static function getService($serviceName)
    {
        if (!self::$cache) {
            self::$cache = new Cache;
        }
        $service = self::$cache->getService($serviceName);
        if ($service != null) {
            return $service;
        }
        $context  = new InitialContext();
        $service1 = $context->lookup($serviceName);
        self::$cache->addService($service1);
        return $service1;
    }
}
