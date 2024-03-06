<?php

namespace Container1xfqxB2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ByNdYTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.by_ndYT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.by_ndYT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'activiteRepository' => ['privates', 'App\\Repository\\ActiviteRepository', 'getActiviteRepositoryService', true],
            'normalizer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
        ], [
            'activiteRepository' => 'App\\Repository\\ActiviteRepository',
            'normalizer' => '?',
        ]);
    }
}
