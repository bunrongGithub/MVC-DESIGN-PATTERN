<?php

$path = __DIR__ . '/../views/';

function view($file, $attributes = []) {
    global $path;
    extract($attributes);
    require $path . $file . '.view.php';
}
