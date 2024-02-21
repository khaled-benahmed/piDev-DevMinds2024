<?php

namespace ContainerTH1nP1S;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Hk99ogSService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hk99ogS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hk99ogS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\UserController::deletUser' => ['privates', '.service_locator.5P.Q9EV', 'get_ServiceLocator_5P_Q9EVService', true],
            'App\\Controller\\Admin\\UserController::index' => ['privates', '.service_locator.soq8KgK', 'get_ServiceLocator_Soq8KgKService', true],
            'App\\Controller\\Admin\\UserController::showUser' => ['privates', '.service_locator.DNF0f.K', 'get_ServiceLocator_DNF0f_KService', true],
            'App\\Controller\\Admin\\UserController::unblockUser' => ['privates', '.service_locator.4T4EJFR', 'get_ServiceLocator_4T4EJFRService', true],
            'App\\Controller\\Admin\\UserController::updateUser' => ['privates', '.service_locator.5P.Q9EV', 'get_ServiceLocator_5P_Q9EVService', true],
            'App\\Controller\\ProfileController::edit' => ['privates', '.service_locator.cg5DUby', 'get_ServiceLocator_Cg5DUbyService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.kXtg5m1', 'get_ServiceLocator_KXtg5m1Service', true],
            'App\\Controller\\RegistrationController::verifyUserEmail' => ['privates', '.service_locator.q2ji3lu', 'get_ServiceLocator_Q2ji3luService', true],
            'App\\Controller\\ResetPasswordController::request' => ['privates', '.service_locator.pXhSQsU', 'get_ServiceLocator_PXhSQsUService', true],
            'App\\Controller\\ResetPasswordController::reset' => ['privates', '.service_locator.kdKsWx5', 'get_ServiceLocator_KdKsWx5Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\Admin\\UserController:deletUser' => ['privates', '.service_locator.5P.Q9EV', 'get_ServiceLocator_5P_Q9EVService', true],
            'App\\Controller\\Admin\\UserController:index' => ['privates', '.service_locator.soq8KgK', 'get_ServiceLocator_Soq8KgKService', true],
            'App\\Controller\\Admin\\UserController:showUser' => ['privates', '.service_locator.DNF0f.K', 'get_ServiceLocator_DNF0f_KService', true],
            'App\\Controller\\Admin\\UserController:unblockUser' => ['privates', '.service_locator.4T4EJFR', 'get_ServiceLocator_4T4EJFRService', true],
            'App\\Controller\\Admin\\UserController:updateUser' => ['privates', '.service_locator.5P.Q9EV', 'get_ServiceLocator_5P_Q9EVService', true],
            'App\\Controller\\ProfileController:edit' => ['privates', '.service_locator.cg5DUby', 'get_ServiceLocator_Cg5DUbyService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.kXtg5m1', 'get_ServiceLocator_KXtg5m1Service', true],
            'App\\Controller\\RegistrationController:verifyUserEmail' => ['privates', '.service_locator.q2ji3lu', 'get_ServiceLocator_Q2ji3luService', true],
            'App\\Controller\\ResetPasswordController:request' => ['privates', '.service_locator.pXhSQsU', 'get_ServiceLocator_PXhSQsUService', true],
            'App\\Controller\\ResetPasswordController:reset' => ['privates', '.service_locator.kdKsWx5', 'get_ServiceLocator_KdKsWx5Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\Admin\\UserController::deletUser' => '?',
            'App\\Controller\\Admin\\UserController::index' => '?',
            'App\\Controller\\Admin\\UserController::showUser' => '?',
            'App\\Controller\\Admin\\UserController::unblockUser' => '?',
            'App\\Controller\\Admin\\UserController::updateUser' => '?',
            'App\\Controller\\ProfileController::edit' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\RegistrationController::verifyUserEmail' => '?',
            'App\\Controller\\ResetPasswordController::request' => '?',
            'App\\Controller\\ResetPasswordController::reset' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\Admin\\UserController:deletUser' => '?',
            'App\\Controller\\Admin\\UserController:index' => '?',
            'App\\Controller\\Admin\\UserController:showUser' => '?',
            'App\\Controller\\Admin\\UserController:unblockUser' => '?',
            'App\\Controller\\Admin\\UserController:updateUser' => '?',
            'App\\Controller\\ProfileController:edit' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\RegistrationController:verifyUserEmail' => '?',
            'App\\Controller\\ResetPasswordController:request' => '?',
            'App\\Controller\\ResetPasswordController:reset' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
