<?php

namespace ContainerWCjsmTD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAppointmentControllerdeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CW7CnPW.App\Controller\AppointmentController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CW7CnPW.App\\Controller\\AppointmentController::delete()'] = ($container->privates['.service_locator.CW7CnPW'] ?? $container->load('get_ServiceLocator_CW7CnPWService'))->withContext('App\\Controller\\AppointmentController::delete()', $container);
    }
}
