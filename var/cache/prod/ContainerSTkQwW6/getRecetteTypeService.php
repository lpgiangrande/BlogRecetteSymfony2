<?php

namespace ContainerSTkQwW6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRecetteTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\RecetteType' shared autowired service.
     *
     * @return \App\Form\RecetteType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/RecetteType.php';

        return $container->privates['App\\Form\\RecetteType'] = new \App\Form\RecetteType();
    }
}
