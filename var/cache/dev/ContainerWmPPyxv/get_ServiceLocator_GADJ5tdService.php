<?php

namespace ContainerWmPPyxv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GADJ5tdService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gADJ5td' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gADJ5td'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'category' => ['privates', '.errored..service_locator.gADJ5td.App\\Entity\\Category', NULL, 'Cannot autowire service ".service_locator.gADJ5td": it needs an instance of "App\\Entity\\Category" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'category' => 'App\\Entity\\Category',
            'entityManager' => '?',
        ]);
    }
}
