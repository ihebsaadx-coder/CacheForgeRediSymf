<?php

namespace ContainerNyhjCuV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getResponsablesRHRepositoryService extends App_KernelLocalDebugContainer
{
    /**
     * Gets the private 'App\Repository\ResponsablesRHRepository' shared autowired service.
     *
     * @return \App\Repository\ResponsablesRHRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/src/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/src/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/src/Repository/LazyServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/src/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/ResponsablesRHRepository.php';

        return $container->privates['App\\Repository\\ResponsablesRHRepository'] = new \App\Repository\ResponsablesRHRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
