<?php

namespace ContainerWCjsmTD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ASbXafoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ASbXafo' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ASbXafo'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'marque' => ['privates', '.errored..service_locator.ASbXafo.App\\Entity\\Marque', NULL, 'Cannot autowire service ".service_locator.ASbXafo": it needs an instance of "App\\Entity\\Marque" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'marque' => 'App\\Entity\\Marque',
            'entityManager' => '?',
        ]);
    }
}
