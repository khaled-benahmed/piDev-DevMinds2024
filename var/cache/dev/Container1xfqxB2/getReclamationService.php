<?php

namespace Container1xfqxB2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReclamationService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Entity\Reclamation' shared autowired service.
     *
     * @return \App\Entity\Reclamation
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Entity'.\DIRECTORY_SEPARATOR.'Reclamation.php';

        return $container->services['App\\Entity\\Reclamation'] = new \App\Entity\Reclamation();
    }
}