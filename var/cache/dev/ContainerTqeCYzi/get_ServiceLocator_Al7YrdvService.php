<?php

namespace ContainerTqeCYzi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Al7YrdvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.al7Yrdv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.al7Yrdv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'recetteRepository' => ['privates', 'App\\Repository\\RecetteRepository', 'getRecetteRepositoryService', true],
        ], [
            'recetteRepository' => 'App\\Repository\\RecetteRepository',
        ]);
    }
}
