<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'twig.loader' shared service.

$this->services['twig.loader'] = $instance = new \Twig\Loader\FilesystemLoader(array(), $this->targetDirs[3]);

$instance->addPath('/var/www/itop/symfony-portal-poc/lib/composer-vendor/symfony/framework-bundle/Resources/views', 'Framework');
$instance->addPath('/var/www/itop/symfony-portal-poc/lib/composer-vendor/symfony/framework-bundle/Resources/views', '!Framework');
$instance->addPath('/var/www/itop/symfony-portal-poc/lib/composer-vendor/symfony/twig-bundle/Resources/views', 'Twig');
$instance->addPath('/var/www/itop/symfony-portal-poc/lib/composer-vendor/symfony/twig-bundle/Resources/views', '!Twig');
$instance->addPath(($this->targetDirs[3].'/templates'));

return $instance;
