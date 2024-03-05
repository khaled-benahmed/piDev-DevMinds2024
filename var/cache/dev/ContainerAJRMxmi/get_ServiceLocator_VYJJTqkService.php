<?php

namespace ContainerAJRMxmi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VYJJTqkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vYJJTqk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vYJJTqk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'planning' => ['privates', '.errored..service_locator.vYJJTqk.App\\Entity\\Planning', NULL, 'Cannot autowire service ".service_locator.vYJJTqk": it references class "App\\Entity\\Planning" but no such service exists.'],
        ], [
            'planning' => 'App\\Entity\\Planning',
        ]);
    }
}
