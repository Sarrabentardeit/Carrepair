<?php

namespace ContainerQHZjSox;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrderControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.W3vCgFu.App\Controller\OrderController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.W3vCgFu.App\\Controller\\OrderController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'orderRepository' => ['privates', 'App\\Repository\\OrderRepository', 'getOrderRepositoryService', true],
        ], [
            'orderRepository' => 'App\\Repository\\OrderRepository',
        ]))->withContext('App\\Controller\\OrderController::index()', $container);
    }
}
