<?php

namespace Container1xfqxB2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HRkfwE_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hRkfwE.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hRkfwE.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'normalizer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
            'planningRepository' => ['privates', 'App\\Repository\\PlanningRepository', 'getPlanningRepositoryService', true],
        ], [
            'normalizer' => '?',
            'planningRepository' => 'App\\Repository\\PlanningRepository',
        ]);
    }
}
