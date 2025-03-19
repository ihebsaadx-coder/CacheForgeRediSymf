<?php

namespace Container91AX2NO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSncRedis_DefaultService extends App_KernelLocalDebugContainer
{
    /**
     * Gets the private 'snc_redis.default' shared service.
     *
     * @return \Redis
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/snc/redis-bundle/src/Factory/PhpredisClientFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/snc/redis-bundle/src/Logger/RedisCallInterceptor.php';
        include_once \dirname(__DIR__, 4).'/vendor/snc/redis-bundle/src/Logger/RedisLogger.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofphp/proxy-manager-lts/src/ProxyManager/Configuration.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofphp/proxy-manager-lts/src/ProxyManager/GeneratorStrategy/GeneratorStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofphp/proxy-manager-lts/src/ProxyManager/GeneratorStrategy/FileWriterGeneratorStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofphp/proxy-manager-lts/src/ProxyManager/FileLocator/FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofphp/proxy-manager-lts/src/ProxyManager/FileLocator/FileLocator.php';

        $a = new \Symfony\Bridge\Monolog\Logger('snc_redis');
        $a->pushHandler(($container->privates['monolog.handler.null_internal'] ?? ($container->privates['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler())));
        $b = new \ProxyManager\Configuration();
        $b->setGeneratorStrategy(new \ProxyManager\GeneratorStrategy\FileWriterGeneratorStrategy(new \ProxyManager\FileLocator\FileLocator($container->targetDir.'')));
        $b->setProxiesTargetDir($container->targetDir.'');

        return $container->privates['snc_redis.default'] = (new \Snc\RedisBundle\Factory\PhpredisClientFactory(new \Snc\RedisBundle\Logger\RedisCallInterceptor(new \Snc\RedisBundle\Logger\RedisLogger($a), ($container->privates['debug.stopwatch'] ?? ($container->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)))), $b))->create('Redis', [0 => 'redis://localhost:6379'], ['connection_async' => false, 'connection_persistent' => false, 'connection_timeout' => 5, 'read_write_timeout' => NULL, 'iterable_multibulk' => false, 'throw_errors' => true, 'serialization' => 'default', 'cluster' => NULL, 'prefix' => NULL, 'service' => NULL], 'default', true);
    }
}
