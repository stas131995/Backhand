<?php

use App\Requests\Request;
use App\Container\Container;

$container = new Container();

$container->bind(Request::class, function () {
    return new Request($_REQUEST, $_SESSION);
});

return $container;