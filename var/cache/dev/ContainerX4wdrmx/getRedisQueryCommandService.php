<?php

namespace ContainerX4wdrmx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRedisQueryCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Snc\RedisBundle\Command\RedisQueryCommand' shared service.
     *
     * @return \Snc\RedisBundle\Command\RedisQueryCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/snc/redis-bundle/src/Command/RedisQueryCommand.php';

        $container->privates['Snc\\RedisBundle\\Command\\RedisQueryCommand'] = $instance = new \Snc\RedisBundle\Command\RedisQueryCommand(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'default' => ['privates', 'snc_redis.default', 'getSncRedis_DefaultService', true],
        ], [
            'default' => 'Redis',
        ]), ($container->privates['var_dumper.contextualized_cli_dumper'] ?? $container->load('getVarDumper_ContextualizedCliDumperService')), ($container->services['var_dumper.cloner'] ?? $container->getVarDumper_ClonerService()));

        $instance->setName('redis:query');

        return $instance;
    }
}
