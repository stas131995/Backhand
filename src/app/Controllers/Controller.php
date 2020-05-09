<?php

namespace App\Controllers;

use Jenssegers\Blade\Blade;

class Controller
{
    public function view(string $viewName, array $params)
    {
        $blade = new Blade(ROOT_DIR . '/src/views', ROOT_DIR . '/cache/views');
        echo $blade->render($viewName, $params);
    }
}