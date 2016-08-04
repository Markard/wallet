<?php

declare(strict_types = 1);

use Phalcon\Mvc\Router\Route;

/**
 * @var Route $route
 */

$router->add('/about', [
    'namespace' => 'app\controllers',
    'controller' => 'Site',
    'action' => 'about',
]);

$router->add('/', [
    'namespace' => 'app\controllers',
    'controller' => 'Site',
    'action' => 'index',
]);

