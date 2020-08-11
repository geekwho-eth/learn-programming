<?php

namespace DesignPattern\ChainOfResponsibility;

/**
 * 错误日志
 */
class FileLogger extends AbstractLogger
{
    public function __construct($level)
    {
        $this->level = $level;
    }

    public function write($message)
    {
        echo "File Console::Logger: " . $message;
    }
}
