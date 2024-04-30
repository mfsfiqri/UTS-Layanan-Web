<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Router;

$path = "/";
if (isset($_SERVER['PATH_INFO'])) {
  $path = $_SERVER['PATH_INFO'];
}

Router::route($path);
