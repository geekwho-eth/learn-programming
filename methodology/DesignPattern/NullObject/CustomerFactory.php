<?php

namespace DesignPattern\NullObject;

class CustomerFactory
{
    public static $names = ["Rob", "Joe", "Julie"];

    public static function getCustomer($name)
    {
        for ($i = 0; $i < count(self::$names); $i++) {
            if (self::$names[$i] == $name) {
                return new RealCustomer($name);
            }
            return new NullCustomer();
        }
    }
}
