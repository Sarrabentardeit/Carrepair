<?php

namespace ContainerWmPPyxv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStockMovementControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Z.XTIaF.App\Controller\StockMovementController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Z.XTIaF.App\\Controller\\StockMovementController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'stockMovementRepository' => ['privates', 'App\\Repository\\StockMovementRepository', 'getStockMovementRepositoryService', true],
        ], [
            'stockMovementRepository' => 'App\\Repository\\StockMovementRepository',
        ]))->withContext('App\\Controller\\StockMovementController::index()', $container);
    }
}
