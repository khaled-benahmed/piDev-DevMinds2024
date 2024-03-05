<?php

namespace ContainerAJRMxmi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8E040viService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8E040vi' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8E040vi'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'normalizer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
            'repo' => ['privates', 'App\\Repository\\ActiviteRepository', 'getActiviteRepositoryService', true],
        ], [
            'normalizer' => '?',
            'repo' => 'App\\Repository\\ActiviteRepository',
        ]);
    }
}
