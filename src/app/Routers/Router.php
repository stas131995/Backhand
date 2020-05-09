<?php

namespace App\Routers;

use App\Requests\Request;
use App\Container\Container;

class Router
{
    protected $matched = false;

    protected $container;

    protected $request;

    public function __construct(Container $container)
    {
        $this->container = $container;
        $this->request = $container->make(Request::class);
    }

    protected function resolveActionPattern(string $pattern)
    {
        $split = explode("::", $pattern);
        if (count($split) < 2) {
            throw new \Exception('Invalid route pattern: ' . $pattern);
        }
        $className = "\\App\\Controllers\\" . $split[0];
        $methodName = $split[1];
        $instance = $this->container->make($className);
        $this->matched = true;
        return $instance->$methodName($this->request);
    }

    protected function uriMatches(string $uriRegExp, string $requestMethod): bool
    {
        return $this->matched === false
            && $_SERVER['REQUEST_METHOD'] === $requestMethod
            && preg_match($uriRegExp, $_SERVER['REQUEST_URI']);
    }

    public function get(string $uriPattern, string $actionPattern)
    {
        if ($this->uriMatches($uriPattern, 'GET')) {
            return $this->resolveActionPattern($actionPattern);
        }
    }

    public function post(string $uriPattern, string $actionPattern)
    {
        if ($this->uriMatches($uriPattern, 'POST')) {
            return $this->resolveActionPattern($actionPattern);
        }
    }


}