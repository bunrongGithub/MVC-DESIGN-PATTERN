<?php
require_once 'Core\Router.php';
require_once 'Core\Functions.php';
require_once 'Core\view.php';


$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_POST[ '__method' ] ?? $_SERVER[ 'REQUEST_METHOD' ];
