<?php

namespace DesignPattern\AbstractFactory\AbstractFactoryPattern;

abstract class AbstractFactory
{
    abstract public function getColor($color);
    abstract public function getShape($shape);
}
