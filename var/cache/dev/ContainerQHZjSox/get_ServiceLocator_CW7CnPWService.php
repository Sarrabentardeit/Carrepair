<?php

namespace ContainerQHZjSox;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CW7CnPWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CW7CnPW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CW7CnPW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'appointment' => ['privates', '.errored..service_locator.CW7CnPW.App\\Entity\\Appointment', NULL, 'Cannot autowire service ".service_locator.CW7CnPW": it needs an instance of "App\\Entity\\Appointment" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'appointment' => 'App\\Entity\\Appointment',
            'entityManager' => '?',
        ]);
    }
}