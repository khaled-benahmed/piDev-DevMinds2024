<?php

namespace Container1xfqxB2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_TokenCreatedListener_TwoFactor_MainService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authentication.token_created_listener.two_factor.main' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\TwoFactor\Event\AuthenticationTokenListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'Event'.\DIRECTORY_SEPARATOR.'AuthenticationTokenListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'AuthenticationContextFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'AuthenticationContextFactory.php';

        $a = ($container->privates['scheb_two_factor.provider_initiator'] ?? $container->load('getSchebTwoFactor_ProviderInitiatorService'));

        if (isset($container->privates['security.authentication.token_created_listener.two_factor.main'])) {
            return $container->privates['security.authentication.token_created_listener.two_factor.main'];
        }

        return $container->privates['security.authentication.token_created_listener.two_factor.main'] = new \Scheb\TwoFactorBundle\Security\TwoFactor\Event\AuthenticationTokenListener('main', $container->load('getSchebTwoFactor_ConditionRegistryService'), $a, new \Scheb\TwoFactorBundle\Security\TwoFactor\AuthenticationContextFactory('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\AuthenticationContext'), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}
