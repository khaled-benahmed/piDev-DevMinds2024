<?php

namespace Container1xfqxB2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Pqy61XCService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Pqy61XC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Pqy61XC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'planningRepository' => ['privates', 'App\\Repository\\PlanningRepository', 'getPlanningRepositoryService', true],
        ], [
            'planningRepository' => 'App\\Repository\\PlanningRepository',
        ]);
    }
}
