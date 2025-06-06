<?php

namespace ContainerWCjsmTD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FZhUcSfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.FZhUcSf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.FZhUcSf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'modeleRepository' => ['privates', 'App\\Repository\\ModeleRepository', 'getModeleRepositoryService', true],
        ], [
            'modeleRepository' => 'App\\Repository\\ModeleRepository',
        ]);
    }
}
