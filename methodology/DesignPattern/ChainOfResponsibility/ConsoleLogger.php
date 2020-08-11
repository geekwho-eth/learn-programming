<?php

namespace DesignPattern\ChainOfResponsibility;

/**
 * 命令行日志
 */
class ConsoleLogger extends AbstractLogger
{
    public function __construct($level)
    {
        $this->level = $level;
    }

    public function write($message)
    {
        echo "Standard Console::Logger: " . $message;
    }
}
