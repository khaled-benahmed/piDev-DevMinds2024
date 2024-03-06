<?php

namespace ContainerHUnEMOW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSchebTwoFactor_AuthenticatedTokenConditionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'scheb_two_factor.authenticated_token_condition' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\TwoFactor\Condition\AuthenticatedTokenCondition
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'Condition'.\DIRECTORY_SEPARATOR.'TwoFactorConditionInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'Condition'.\DIRECTORY_SEPARATOR.'AuthenticatedTokenCondition.php';

        return $container->privates['scheb_two_factor.authenticated_token_condition'] = new \Scheb\TwoFactorBundle\Security\TwoFactor\Condition\AuthenticatedTokenCondition($container->parameters['scheb_two_factor.security_tokens']);
    }
}
