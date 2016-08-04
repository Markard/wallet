<?php

declare(strict_types = 1);

use Phalcon\Config;
use Phalcon\Loader;

/**
 * @var Config $config
 */

$loader = new Loader();

$loader->registerNamespaces([
    'app' => APP_PATH,
]);

$loader->register();

return $loader;