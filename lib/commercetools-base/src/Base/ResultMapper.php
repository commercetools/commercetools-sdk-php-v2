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
    /**
     * @template T of JsonObject
     * @psalm-param class-string<T> $type
     * @psalm-return T
     */
    public function mapResponseToClass(string $type, ResponseInterface $response)
    {
        return $type::of($this->responseData($response));
    }

    /**
     * @psalm-return stdClass
     */
    private function responseData(ResponseInterface $response)
    {
        $body = (string)$response->getBody();
        /** @psalm-var ?stdClass $data */
        $data = json_decode($body);
        if (is_null($data)) {
            throw new InvalidArgumentException();
        }
        return $data;
    }
    
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
        $typeClass = new ReflectionClass($type);
        $constructor = $typeClass->getConstructor();
        if (is_null($constructor)) {
            throw new InvalidArgumentException();
        }
        $params = $constructor->getParameters();

        /** @psalm-var array<int, mixed> $args */
        $args = array_map(
            function (ReflectionParameter $param) use ($data) {
                return ($data[$param->name] ?? null);
            },
            $params
        );
        return $typeClass->newInstanceArgs($args);
    }
}
