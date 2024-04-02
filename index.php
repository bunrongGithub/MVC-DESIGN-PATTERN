<?php
use Core\Functions;
require_once 'Core\Functions.php';
require_once 'Core\view.php';
$routes = [
    '/' => 'controllers/index.php',
    '/about'=>'controllers/about.php',
];

$func = Functions::class;

$uri = parse_url($_SERVER['REQUEST_URI'] , PHP_URL_PATH);

$func::routes($uri, $routes);
