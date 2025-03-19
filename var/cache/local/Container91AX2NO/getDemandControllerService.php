<?php

namespace Container91AX2NO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDemandControllerService extends App_KernelLocalDebugContainer
{
    /**
     * Gets the public 'App\Controller\DemandController' shared autowired service.
     *
     * @return \App\Controller\DemandController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/DemandController.php';

        $container->services['App\\Controller\\DemandController'] = $instance = new \App\Controller\DemandController($container->getEnv('URL_ACTIVITI_STARTPROCESS'), $container->getEnv('TOKEN_ACTIVITI'), $container->getEnv('SERVER_ACTIVITI'), $container->getEnv('URL_COCKPIT'), $container->getEnv('SP_WSDL'), $container->getEnv('SP_USERNAME'), $container->getEnv('SP_PASSWORD'), ($container->services['jms_serializer'] ?? $container->load('getJmsSerializerService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')), ($container->services['cache.app'] ?? $container->load('getCache_AppService')));

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\DemandController', $container));

        return $instance;
    }
}
