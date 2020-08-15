<?php

namespace DesignPattern\ChainOfResponsibility;

class ChainPatternDemo
{
    private $data;

    public function getChainOfLoggers()
    {
        $errorLogger   = new ErrorLogger(AbstractLogger::ERROR);
        $fileLogger    = new FileLogger(AbstractLogger::DEBUG);
        $consoleLogger = new ConsoleLogger(AbstractLogger::INFO);
        $errorLogger->setNextLogger($fileLogger);
        $fileLogger->setNextLogger($consoleLogger);

        return $errorLogger;
    }

    public function run()
    {
        $loggerChain = $this->getChainOfLoggers();
        $loggerChain->logMessage(AbstractLogger::INFO, "This is an information.");

        $loggerChain->logMessage(
            AbstractLogger::DEBUG,
            "This is a debug level information."
        );

        $loggerChain->logMessage(
            AbstractLogger::ERROR,
            "This is an error information."
        );
    }
}
