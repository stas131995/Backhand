<?php

use App\Routers\Router;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "../vendor/autoload.php";

define("ROOT_DIR", dirname(__DIR__, 1));

session_start();

$dotenv = Dotenv\Dotenv::createImmutable(ROOT_DIR);
$dotenv->load();

$container = require "../src/container.php";

$router = $container->make(Router::class);

require "../src/routes.php";