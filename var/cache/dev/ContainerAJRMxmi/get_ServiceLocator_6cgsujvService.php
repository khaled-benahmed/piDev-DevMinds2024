<?php

namespace ContainerAJRMxmi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6cgsujvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6cgsujv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6cgsujv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Normalizer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
            'activite' => ['privates', '.errored..service_locator.6cgsujv.App\\Entity\\Activite', NULL, 'Cannot autowire service ".service_locator.6cgsujv": it references class "App\\Entity\\Activite" but no such service exists.'],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'Normalizer' => '?',
            'activite' => 'App\\Entity\\Activite',
            'em' => '?',
        ]);
    }
}
