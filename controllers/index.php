<?php

use Core\Database;
require_once "./Core/Database.php";

$config = require_once 'config.php';

$database = new Database($config);

$homes = $database->query("select * from home")->get();

view('index' ,
    [
        'homes'=>$homes
    ]
);