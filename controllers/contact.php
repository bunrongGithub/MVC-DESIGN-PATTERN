<?php

use Core\Database;
require_once BestPath. "Core/Database.php";

$config =   require_once BestPath . 'config.php';

$database = new Database($config);

$homes = $database->query("select * from home")->get();


view('contact' ,['homes'=>$homes]);