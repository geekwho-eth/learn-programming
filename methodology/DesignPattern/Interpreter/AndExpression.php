<?php

namespace DesignPattern\Interpreter;

/**
 * and表达式
 */
class AndExpression implements IExpression
{
    private $expr1;
    private $expr2;

    public function __construct($expr1, $expr2)
    {
        $this->expr1 = $expr1;
        $this->expr2 = $expr2;
    }

    public function interpret($context)
    {
        return $this->expr1->interpret($context) && $this->expr2->interpret($context);
    }
}
