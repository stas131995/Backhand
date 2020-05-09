<?php

namespace App\Requests;

use Jenssegers\Blade\Blade;

class Request 
{
    private $session;

    private $request;

    public function __construct(array $request, array $session)
    {
        $this->request = $request;
        $this->session = $session;
    }

    public function hasSession(string $name): bool
    {
        return isset($this->session[$name]);
    }

    public function setSession(string $key, $value): void
    {
        if (strlen($key) === 0) {
            throw new Exception('The session key cannot be empty string!');
        }
        $_SESSION[$key] = $this->session[$key] = $value;
    }

    public function getSession(string $key)
    {
        return $this->hasSession($key) ? $this->session[$key] : null;
    }

    public function hasInput(string $key):bool
    {
        return isset($this->request[$key]);
    }

    public function input(string $key)
    {
        return $this->hasInput($key) ? $this->request[$key] : null;
    }
}