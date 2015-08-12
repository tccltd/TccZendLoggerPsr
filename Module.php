<?php

namespace TccZendLoggerPsr;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ServiceProviderInterface;

class Module implements AutoloaderProviderInterface, ServiceProviderInterface
{
    public function getServiceConfig() {
        return [
            'factories' => [
                'tcc_logger' => 'TccZendLoggerPsr\Factory\LoggerFactory'
            ]
        ];
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
        );
    }
}
