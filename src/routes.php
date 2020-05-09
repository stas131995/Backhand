<?php

$router->get('/^$|^\/$/', 'HomepageController::index');

$router->get('/login/', 'LoginpageController::index');
$router->post('/login/', 'LoginpageController::login');

//$router->get('/.*/', 'NotFoundPageController::index');