<?php

namespace TccZendLoggerPsr\Factory;

use TccZendLoggerPsr\Log\Logger;
use Zend\Log\Writer\Stream;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class LoggerFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $sl) {
        // TODO: Should take more configuration but this does what is needed for now
        $config = $sl->get('config');
        $logger = new Logger();
        $logger->addWriter(new Stream($config['tcc_logger']['log_location']));

        return $logger;
    }
}