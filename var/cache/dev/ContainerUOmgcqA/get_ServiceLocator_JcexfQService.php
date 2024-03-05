<?php

namespace ContainerUOmgcqA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JcexfQService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._jcexfQ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._jcexfQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'platRepository' => ['privates', 'App\\Repository\\PlatRepository', 'getPlatRepositoryService', true],
        ], [
            'entityManager' => '?',
            'platRepository' => 'App\\Repository\\PlatRepository',
        ]);
    }
}
