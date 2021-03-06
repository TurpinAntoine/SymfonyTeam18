<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.bff41CH' shared service.

return $this->privates['service_locator.bff41CH'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('confession' => function (): ?\App\Repository\ConfessionRepository {
    return ($this->privates['App\Repository\ConfessionRepository'] ?? $this->load('getConfessionRepositoryService.php'));
}, 'mailer' => function () {
    return ($this->services['swiftmailer.mailer.default'] ?? $this->load('getSwiftmailer_Mailer_DefaultService.php'));
}, 'userRepo' => function (): ?\App\Repository\UserRepository {
    return ($this->privates['App\Repository\UserRepository'] ?? $this->load('getUserRepositoryService.php'));
}));
