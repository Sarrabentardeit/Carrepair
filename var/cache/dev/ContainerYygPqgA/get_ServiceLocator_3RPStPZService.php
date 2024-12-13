<?php

namespace ContainerYygPqgA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3RPStPZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3RPStPZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3RPStPZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'vehicle' => ['privates', '.errored..service_locator.3RPStPZ.App\\Entity\\Vehicle', NULL, 'Cannot autowire service ".service_locator.3RPStPZ": it needs an instance of "App\\Entity\\Vehicle" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'vehicle' => 'App\\Entity\\Vehicle',
            'entityManager' => '?',
        ]);
    }
}