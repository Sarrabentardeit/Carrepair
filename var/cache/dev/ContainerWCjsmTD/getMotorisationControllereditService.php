<?php

namespace ContainerWCjsmTD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMotorisationControllereditService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ijeeteN.App\Controller\MotorisationController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.ijeeteN'] ?? $container->load('get_ServiceLocator_IjeeteNService'));

        if (isset($container->privates['.service_locator.ijeeteN.App\\Controller\\MotorisationController::edit()'])) {
            return $container->privates['.service_locator.ijeeteN.App\\Controller\\MotorisationController::edit()'];
        }

        return $container->privates['.service_locator.ijeeteN.App\\Controller\\MotorisationController::edit()'] = $a->withContext('App\\Controller\\MotorisationController::edit()', $container);
    }
}
