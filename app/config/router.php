<?php

declare(strict_types = 1);

use Phalcon\Mvc\Router;
use Phalcon\Mvc\View;

/**
 * @var \Phalcon\Di\FactoryDefault $di
 */

$di->set('router', function () {
    $router = new Router(false);
    $router->setUriSource(Router::URI_SOURCE_SERVER_REQUEST_URI);

    require_once 'routers/siteController.php';

    $router->handle();

    return $router;
});