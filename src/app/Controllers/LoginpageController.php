<?php

namespace App\Controllers;

use App\Requests\Request;
use Jenssegers\Blade\Blade;
use App\Controllers\Controller;
use App\Repositories\LoginRepository;

class LoginpageController extends Controller
{
    public function index(Request $request)
    {
        if ($request->hasSession('user_id')) {
            header("Location: /dashboard");
            return;
        }
        $this->view("dashboard.login", []);
    }

    public function login(Request $request)
    {
        if ($request->hasSession('user_id')) {
            header("Location: /dashboard");
            return;
        }
        $errors = [];
        if (!$request->hasInput('username')) {
            $errors['username'] = 'Username Required!!';
        }
        if (!$request->hasInput('password')) {
            $errors['password'] = 'Password Required';
        }
        if (!count($errors)) {
            $repository = new LoginRepository();
            $model = $repository->getByUsername($request->input('username'));
            if (
                $model != null 
                && password_verify($request->input('password'), $model->getPassword())
            ) {
                $request->setSession('user_id', $model->getId());
                header("Location: /dashboard");
                return;
            }
            $errors['sign'] = 'Wrong username or password';    
        }
        $this->view("dashboard.login", [
            'errors' => $errors
        ]);
    }
}