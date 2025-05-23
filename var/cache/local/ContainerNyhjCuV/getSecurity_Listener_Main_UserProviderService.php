<?php

namespace ContainerNyhjCuV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Listener_Main_UserProviderService extends App_KernelLocalDebugContainer
{
    /**
     * Gets the private 'security.listener.main.user_provider' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\UserProviderListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EventListener/UserProviderListener.php';

        $a = ($container->privates['App\\Security\\TokenProvider'] ?? $container->load('getTokenProviderService'));

        if (isset($container->privates['security.listener.main.user_provider'])) {
            return $container->privates['security.listener.main.user_provider'];
        }

        return $container->privates['security.listener.main.user_provider'] = new \Symfony\Component\Security\Http\EventListener\UserProviderListener($a);
    }
}
