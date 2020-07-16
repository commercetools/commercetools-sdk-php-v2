<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */


namespace Commercetools\Base;

use Commercetools\Exception\InvalidArgumentException;
use Psr\Http\Message\ResponseInterface;
use ReflectionClass;
use ReflectionException;
use ReflectionParameter;
use stdClass;

class ResultMapper
{
    /** @psalm-var array<class-string, list<string>> */
    private $constructorParamNames = [];

    /**
     * @template T
     * @psalm-param class-string<T> $type
     * @psalm-param array<string, mixed> $data
     * @psalm-return T
     * @throws InvalidArgumentException
     * @throws ReflectionException
     */
    public function mapToConstructor(string $type, array $data)
    {
        /** @psalm-var list<mixed> $args */
        $args = array_map(
            function ($paramName) use ($data) {
                return ($data[$paramName] ?? null);
            },
            $this->getConstructorParamNames($type)
        );
        return new $type(...$args);
    }
    
    /**
     * @psalm-param class-string $type
     * @psalm-return list<string>
     * @throws InvalidArgumentException
     * @throws ReflectionException
     */
    private function getConstructorParamNames(string $type)
    {
        if (!isset($this->constructorParamNames[$type])) {
            $typeClass = new ReflectionClass($type);
            $constructor = $typeClass->getConstructor();
            if (is_null($constructor)) {
                throw new InvalidArgumentException();
            }
            $this->constructorParamNames[$type] = array_map(
                function (ReflectionParameter $param) {
                    return $param->name;
                },
                $constructor->getParameters()
            );
        }

        return $this->constructorParamNames[$type];
    }
}
