<?php

namespace ContainerQHZjSox;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVehicleControllereditService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3RPStPZ.App\Controller\VehicleController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.3RPStPZ'] ?? $container->load('get_ServiceLocator_3RPStPZService'));

        if (isset($container->privates['.service_locator.3RPStPZ.App\\Controller\\VehicleController::edit()'])) {
            return $container->privates['.service_locator.3RPStPZ.App\\Controller\\VehicleController::edit()'];
        }

        return $container->privates['.service_locator.3RPStPZ.App\\Controller\\VehicleController::edit()'] = $a->withContext('App\\Controller\\VehicleController::edit()', $container);
    }
}