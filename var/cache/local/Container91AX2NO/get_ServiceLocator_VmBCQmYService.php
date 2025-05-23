<?php

namespace Container91AX2NO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VmBCQmYService extends App_KernelLocalDebugContainer
{
    /**
     * Gets the private '.service_locator.VmBCQmY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.VmBCQmY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cache' => ['services', 'cache.app', 'getCache_AppService', true],
        ], [
            'cache' => '?',
        ]);
    }
}
