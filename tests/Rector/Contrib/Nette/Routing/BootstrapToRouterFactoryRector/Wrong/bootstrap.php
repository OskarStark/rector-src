<?php declare(strict_types=1);

use Nette\Application\Routers\RouterList;
use Nette\Config\Configurator;

$configurator = new Configurator;

$container = $configurator->createContainer();

$container->router = new RouterList;
$container->router[] = new Router('index', 'Page:default');

return $container;
