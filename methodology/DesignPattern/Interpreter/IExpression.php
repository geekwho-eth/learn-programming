<?php

namespace DesignPattern\Interpreter;

interface IExpression
{
    public function interpret($context);
}
