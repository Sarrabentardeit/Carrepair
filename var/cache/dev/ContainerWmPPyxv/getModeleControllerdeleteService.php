<?php

namespace ContainerWmPPyxv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getModeleControllerdeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5UfiEs7.App\Controller\ModeleController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5UfiEs7.App\\Controller\\ModeleController::delete()'] = ($container->privates['.service_locator.5UfiEs7'] ?? $container->load('get_ServiceLocator_5UfiEs7Service'))->withContext('App\\Controller\\ModeleController::delete()', $container);
    }
}
