<?php

namespace App\Controllers;

class NotFoundPageController
{
    public function index()
    {
        header("Location: /");
    }
}