<?php

declare(strict_types = 1);

use Phalcon\Config;
use Phalcon\Db\Adapter\Pdo\Mysql;
use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\Url;
use Phalcon\Mvc\View;
use Phalcon\Session\Adapter\Files;

/**
 * @var FactoryDefault $di
 * @var Config $config
 */

$di->set('url', function () use ($config) {
    $url = new Url();
    $url->setBaseUri('/');

    return $url;
});

$di->set('view', function () use ($config) {
    $view = new View();
    $view->setViewsDir($config->application->viewsDir);

    return $view;
});

$di->set('db', function () use ($config) {
    return new Mysql([
        "host" => $config->database->host,
        "username" => $config->database->username,
        "password" => $config->database->password,
        "dbname" => $config->database->name,
    ]);
});

$di->set('session', function () {
    $session = new Files();
    $session->start();

    return $session;
});