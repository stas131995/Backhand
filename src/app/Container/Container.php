<?php

namespace App\Container;

use Exception;
use ReflectionClass;

class Container
{
    protected $bindings = [];

    public function __construct()
    {
        $this->bind[static::class] = function () {
            return $this;
        };
    }

    public function bind(string $name, $action)
    {
        $this->bindings[$name] = $action;
    }

    public function make(string $class)
    {
        if ($class === static::class) {
            return $this;
        }

        if (isset($this->bindings[$class])) {
            return $this->bindings[$class]();
        }

        $ref = new ReflectionClass($class);
        $refConstuctor = $ref->getConstructor();

        if (is_null($refConstuctor)) {
            return new $class;
        }

        $refConstuctorParameters = $refConstuctor->getParameters();

        $paramsToContructor = [];

        foreach ($refConstuctorParameters as $refParameter) {
            
            if ($refParameter->isOptional()) {
                $paramsToContructor[] = $refParameter->getDefaultValue();
                continue;
            }

            $refParameterType = $refParameter->getType();

            if (!$refParameterType->isBuiltin()) {
                $paramsToContructor[] = $this->make($refParameterType);
                continue;
            }

            throw new Exception(
                'Cannot resolve constructor parameter '
                . $refParameter
                . ' at class '
                . $class
            );
        }

        return $ref->newInstanceArgs($paramsToContructor);
    }
}