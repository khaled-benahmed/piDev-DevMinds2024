<?php

namespace Container10GHRe9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_Messenger_EventSubscriber_DoctrineClearEntityManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.orm.messenger.event_subscriber.doctrine_clear_entity_manager' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Messenger\DoctrineClearEntityManagerWorkerSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'Messenger'.\DIRECTORY_SEPARATOR.'DoctrineClearEntityManagerWorkerSubscriber.php';

        return $container->privates['doctrine.orm.messenger.event_subscriber.doctrine_clear_entity_manager'] = new \Symfony\Bridge\Doctrine\Messenger\DoctrineClearEntityManagerWorkerSubscriber(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
