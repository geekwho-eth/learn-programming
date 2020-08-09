<?php

namespace DesignPattern\Interpreter;

/**
 * 终端表达式
 */
class TerminalExpression implements IExpression
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function interpret($context)
    {
        return strpos($context, $this->data) !== false;
    }
}
