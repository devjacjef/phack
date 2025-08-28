<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Loads defined constants and other configs.
define('SITE_PATH', dirname(__DIR__));
require_once SITE_PATH . '/config/app.php';

require_once SITE_PATH . '/core/helpers.php';
require_once SITE_PATH . '/core/router.php';

$router = new Router();

$route = new Route('GET', '/', function() {
    echo 'hi';
});

$router->addRoute($route);

$request = new Request();

$router->dispatch($request);
