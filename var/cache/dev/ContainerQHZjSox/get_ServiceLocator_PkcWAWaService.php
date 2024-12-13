<?php

namespace ContainerQHZjSox;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PkcWAWaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PkcWAWa' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PkcWAWa'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'rendezvous' => ['privates', '.errored..service_locator.PkcWAWa.App\\Entity\\Appointment', NULL, 'Cannot autowire service ".service_locator.PkcWAWa": it needs an instance of "App\\Entity\\Appointment" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'rendezvous' => 'App\\Entity\\Appointment',
            'entityManager' => '?',
        ]);
    }
}