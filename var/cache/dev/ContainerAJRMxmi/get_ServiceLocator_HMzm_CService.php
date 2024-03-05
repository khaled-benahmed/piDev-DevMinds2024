<?php

namespace ContainerAJRMxmi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HMzm_CService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.H_Mzm.c' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.H_Mzm.c'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allergieRepository' => ['privates', 'App\\Repository\\AllergieRepository', 'getAllergieRepositoryService', true],
        ], [
            'allergieRepository' => 'App\\Repository\\AllergieRepository',
        ]);
    }
}
