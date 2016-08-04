<?php

declare(strict_types = 1);

return [
    'database' => [
        'adapter' => 'Mysql',
        'host' => 'localhost',
        'username' => 'root',
        'password' => '',
        'name' => 'test',
    ],
    'application' => [
        'controllersDir' => APP_PATH . '/controllers/',
        'modelsDir' => __DIR__ . '/../models/',
        'viewsDir' => __DIR__ . '/../views/',
        'libraryDir' => __DIR__ . '/../library/',
        'baseUri' => '/',
    ],
];