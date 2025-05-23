<?php

namespace ContainerX4wdrmx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializer_IteratorHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'jms_serializer.iterator_handler' shared service.
     *
     * @return \JMS\Serializer\Handler\IteratorHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Handler/SubscribingHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Handler/IteratorHandler.php';

        return $container->privates['jms_serializer.iterator_handler'] = new \JMS\Serializer\Handler\IteratorHandler();
    }
}
