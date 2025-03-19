<?php

namespace Container91AX2NO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTestRedisConnectionCommandService extends App_KernelLocalDebugContainer
{
    /**
     * Gets the private 'App\Command\TestRedisConnectionCommand' shared autowired service.
     *
     * @return \App\Command\TestRedisConnectionCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Command/TestRedisConnectionCommand.php';

        $container->privates['App\\Command\\TestRedisConnectionCommand'] = $instance = new \App\Command\TestRedisConnectionCommand(($container->services['cache.app'] ?? $container->load('getCache_AppService')));

        $instance->setName('app:test-redis-connection');

        return $instance;
    }
}
