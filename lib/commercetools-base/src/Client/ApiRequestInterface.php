<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */


namespace Commercetools\Client;

use Commercetools\Exception\InvalidArgumentException;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * @template T of ApiRequestInterface
 */
interface ApiRequestInterface extends RequestInterface
{
    /**
     * @param string $parameterName
     * @psalm-param scalar|scalar[] $value
     * @param mixed $value
     * @psalm-return T
     */
    public function withQueryParam(string $parameterName, $value): ApiRequestInterface;

    /**
     * @param array $options
     * @throws InvalidArgumentException
     * @throws GuzzleException
     * @psalm-suppress InvalidThrow
     */
    public function send(array $options = []): ResponseInterface;

    /**
     * @param array $options
     * @throws InvalidArgumentException
     * @throws GuzzleException
     * @psalm-suppress InvalidThrow
     */
    public function sendAsync(array $options = []): PromiseInterface;

    public function getClient(): ?ClientInterface;
}
