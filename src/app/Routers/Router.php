<?php

namespace App\Routers;

class Router
{
    protected $matched = false;

    protected function resolveActionPattern(string $pattern)
    {
        $split = explode("::", $pattern);
        if (count($split) < 2) {
            throw new \Exception('Invalid route pattern: ' . $pattern);
        }
        $className = "\\App\\Controllers\\" . $split[0];
        $methodName = $split[1];
        $instance = new $className();
        $this->matched = true;
        return $instance->$methodName();
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

}