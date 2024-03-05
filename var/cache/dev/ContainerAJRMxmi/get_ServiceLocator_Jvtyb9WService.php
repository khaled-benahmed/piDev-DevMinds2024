<?php

namespace ContainerAJRMxmi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Jvtyb9WService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Jvtyb9W' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Jvtyb9W'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allergieRepository' => ['privates', 'App\\Repository\\AllergieRepository', 'getAllergieRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'allergieRepository' => 'App\\Repository\\AllergieRepository',
            'entityManager' => '?',
        ]);
    }
}
