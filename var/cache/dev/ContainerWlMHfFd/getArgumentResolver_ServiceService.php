<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'argument_resolver.service' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

return $this->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array('App\\Controller\\HomeController:ajax' => function () {
    return ($this->privates['service_locator.fRn_RlV'] ?? $this->load('getServiceLocator_FRnRlVService.php'));
}, 'App\\Controller\\HomeController:index' => function () {
    return ($this->privates['service_locator.bff41CH'] ?? $this->load('getServiceLocator_Bff41CHService.php'));
}, 'App\\Controller\\RegistrationController:register' => function () {
    return ($this->privates['service_locator.o9PmENj'] ?? $this->load('getServiceLocator_O9PmENjService.php'));
}, 'App\\Controller\\SecurityController:login' => function () {
    return ($this->privates['service_locator.ltE88OR'] ?? $this->load('getServiceLocator_LtE88ORService.php'));
}, 'App\\Controller\\HomeController::ajax' => function () {
    return ($this->privates['service_locator.fRn_RlV'] ?? $this->load('getServiceLocator_FRnRlVService.php'));
}, 'App\\Controller\\HomeController::index' => function () {
    return ($this->privates['service_locator.bff41CH'] ?? $this->load('getServiceLocator_Bff41CHService.php'));
}, 'App\\Controller\\RegistrationController::register' => function () {
    return ($this->privates['service_locator.o9PmENj'] ?? $this->load('getServiceLocator_O9PmENjService.php'));
}, 'App\\Controller\\SecurityController::login' => function () {
    return ($this->privates['service_locator.ltE88OR'] ?? $this->load('getServiceLocator_LtE88ORService.php'));
})));
