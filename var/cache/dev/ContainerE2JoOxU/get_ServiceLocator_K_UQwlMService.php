<?php

namespace ContainerE2JoOxU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_K_UQwlMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.K.UQwlM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.K.UQwlM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'fileUploader' => ['privates', 'App\\Service\\FileUploader', 'getFileUploaderService', true],
        ], [
            'em' => '?',
            'fileUploader' => 'App\\Service\\FileUploader',
        ]);
    }
}