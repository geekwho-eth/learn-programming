<?php

namespace DesignPattern\NullObject;

class NullPatternDemo
{
    public function run()
    {
        $customer1 = CustomerFactory::getCustomer("Rob");
        $customer2 = CustomerFactory::getCustomer("Bob");
        $customer3 = CustomerFactory::getCustomer("Julie");
        $customer4 = CustomerFactory::getCustomer("Laura");

        echo "Customers";
        echo $customer1->getName();
        echo $customer2->getName();
        echo $customer3->getName();
        echo $customer4->getName();
    }
}
