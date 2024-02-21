<?php

namespace ContainerX8ppO4h;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Rw58U7KService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Rw58U7K' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Rw58U7K'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'promotionRepository' => ['privates', 'App\\Repository\\PromotionRepository', 'getPromotionRepositoryService', true],
        ], [
            'promotionRepository' => 'App\\Repository\\PromotionRepository',
        ]);
    }
}
