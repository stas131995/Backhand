<?php

use App\Routers\Router;

$router = new Router();

$router->get('/^$|^\/$/', 'HomepageController::index');

$router->get('/.*/', 'NotFoundPageController::index');