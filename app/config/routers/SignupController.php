<?php

declare(strict_types = 1);

use Phalcon\Mvc\Router\Route;

/**
 * @var Route $route
 */

$router->add('/signup', [
    'namespace' => 'app\controllers',
    'controller' => 'Signup',
    'action' => 'index',
]);

$router->add('/signup/register', [
    'namespace' => 'app\controllers',
    'controller' => 'Signup',
    'action' => 'register',
]);

