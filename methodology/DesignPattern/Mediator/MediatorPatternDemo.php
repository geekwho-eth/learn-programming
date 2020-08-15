<?php

namespace DesignPattern\Mediator;

class MediatorPatternDemo
{
    public function run()
    {
        $robert = new User('Robert');
        $john   = new User('John');

        $robert->sendMessage("Hi! John!");
        $john->sendMessage("Hello! Robert!");
    }
}
