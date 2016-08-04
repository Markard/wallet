<?php

/**
 * Define some useful constants
 */
use Phalcon\Config;
use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\Application;

define('BASE_PATH', dirname(__DIR__));
define('APP_PATH', BASE_PATH . '/app');
define('CONF_PATH', APP_PATH . '/config');
define('VENDOR_PATH', dirname(__DIR__) . '/vendor');

try {
    $config = new Config(require CONF_PATH . '/config.php');

    /**
     * Include the loader
     */
    require CONF_PATH . '/loader.php';

    /**
     * Include composer autoloader
     */
    require VENDOR_PATH . '/autoload.php';

    $di = new FactoryDefault();
    require CONF_PATH . '/services.php';
    require CONF_PATH . '/router.php';

    $application = new Application($di);
    $application->useImplicitView(false);

    $response = $application->handle();
    $response->send();
} catch (Throwable $e) {
    echo "Exception: {$e->getMessage()}";
}
