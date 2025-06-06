<?php

namespace ContainerWmPPyxv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminDashboardControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.OtsSqKs.App\Controller\AdminDashboardController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.OtsSqKs.App\\Controller\\AdminDashboardController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
            'productRepository' => ['privates', 'App\\Repository\\ProductRepository', 'getProductRepositoryService', true],
            'appointmentRepository' => ['privates', 'App\\Repository\\AppointmentRepository', 'getAppointmentRepositoryService', true],
        ], [
            'userRepository' => 'App\\Repository\\UserRepository',
            'productRepository' => 'App\\Repository\\ProductRepository',
            'appointmentRepository' => 'App\\Repository\\AppointmentRepository',
        ]))->withContext('App\\Controller\\AdminDashboardController::index()', $container);
    }
}
