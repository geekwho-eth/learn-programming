<?php

namespace DesignPattern\ChainOfResponsibility;

/**
 * 错误日志
 */
class ErrorLogger extends AbstractLogger
{
    public function __construct($level)
    {
        $this->level = $level;
    }

    public function write($message)
    {
        echo "Error Console::Logger: " . $message;
    }
}
