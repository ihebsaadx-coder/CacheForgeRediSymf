<?php

namespace ContainerNyhjCuV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_90baQdIService extends App_KernelLocalDebugContainer
{
    /**
     * Gets the private '.service_locator.90baQdI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.90baQdI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'flasher' => ['services', 'flasher', 'getFlasherService', false],
        ], [
            'doctrine' => '?',
            'flasher' => '?',
        ]);
    }
}
