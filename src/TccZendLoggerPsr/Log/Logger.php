<?php

namespace TccZendLoggerPsr\Log;

use Psr\Log\LoggerInterface as PsrLoggerInterface;
use Zend\Log\Logger as ZendLogger;

class Logger implements PsrLoggerInterface
{
    protected $logger;

    public function __construct(array $options = null)
    {
        $this->logger = new ZendLogger($options);
    }

    public function __call($function, $args)
    {
        return call_user_func_array(array($this->logger, $function), $args);
    }

    public function emergency($message, array $context = array())
    {
        return $this->logger->emerg($message, $context);
    }

    public function alert($message, array $context = array())
    {
        return $this->logger->alert($message, $context);;
    }

    public function critical($message, array $context = array())
    {
        return $this->logger->crit($message, $context);
    }

    public function error($message, array $context = array())
    {
        return $this->logger->err($message, $context);
    }

    public function warning($message, array $context = array())
    {
        return $this->logger->warn($message, $context);
    }

    public function notice($message, array $context = array())
    {
        return $this->logger->notice($message, $context);
    }

    public function info($message, array $context = array())
    {
        return $this->logger->info($message, $context);
    }

    public function debug($message, array $context = array())
    {
        return $this->logger->debug($message, $context);
    }

    public function log($level, $message, array $context = array())
    {
        return $this->logger->log($level, $message, $context);
    }
}
