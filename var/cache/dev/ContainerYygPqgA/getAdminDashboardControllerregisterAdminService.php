<?php

namespace ContainerYygPqgA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminDashboardControllerregisterAdminService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5SuUxla.App\Controller\AdminDashboardController::registerAdmin()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.5SuUxla'] ?? $container->load('get_ServiceLocator_5SuUxlaService'));

        if (isset($container->privates['.service_locator.5SuUxla.App\\Controller\\AdminDashboardController::registerAdmin()'])) {
            return $container->privates['.service_locator.5SuUxla.App\\Controller\\AdminDashboardController::registerAdmin()'];
        }

        return $container->privates['.service_locator.5SuUxla.App\\Controller\\AdminDashboardController::registerAdmin()'] = $a->withContext('App\\Controller\\AdminDashboardController::registerAdmin()', $container);
    }
}