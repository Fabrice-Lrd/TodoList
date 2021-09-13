<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Doctrine\DBAL\Tools\Console\Command\RunSqlCommand' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Command/RunSqlCommand.php';
include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/ConnectionProvider.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Dbal/ManagerRegistryAwareConnectionProvider.php';

$this->privates['Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand'] = $instance = new \Doctrine\DBAL\Tools\Console\Command\RunSqlCommand(new \Doctrine\Bundle\DoctrineBundle\Dbal\ManagerRegistryAwareConnectionProvider(new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default')));

$instance->setName('dbal:run-sql');

return $instance;