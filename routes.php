<?php
global $uri , $method;

use Core\Router;
require_once 'init.php';

Router::get('/' , 'controllers/index.php');
Router::get('/about' , 'controllers/about.php');
Router::get('/contact' , 'controllers/contact.php');
Router::route($uri, $method);
