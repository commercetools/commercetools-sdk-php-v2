<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Client;

use Commercetools\Exception\InvalidArgumentException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\ResponseInterface;

/** @psalm-suppress PropertyNotSetInConstructor */
class ApiRequest extends Request
{
    /** @psalm-var array<string, scalar[]> */
    private $queryParts;
    /** @psalm-var string */
    private $query;

    /**
     * @psalm-var Client|null
     * @readonly
     */
    private $client;

    /**
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|\Psr\Http\Message\StreamInterface|resource|string $body
     */
    public function __construct(?Client $client, string $method, string $uri, array $headers = [], $body = null, string $version = '1.1')
    {
        $this->client = $client;
        $headers = $this->ensureHeader($headers, 'Content-Type', 'application/json');

        parent::__construct($method, $uri, $headers, $body, $version);
    }

    /**
     * @psalm-param scalar $value
     *
     * @param mixed $value
     * @psalm-return static
     */
    public function withQueryParam(string $parameterName, $value): ApiRequest
    {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            /** @psalm-var array<string, scalar[]> */
            $this->queryParts = array_map(
                /**
                 * @psalm-param scalar|scalar[] $value
                 * @psalm-return scalar[]
                 *
                 * @param mixed $value
                 */
                function ($value): array {
                    if (is_array($value)) {
                        return $value;
                    }

                    return [$value];
                },
                Psr7\parse_query($query)
            );
        }
        $this->queryParts[$parameterName][] = $value;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);

        return $this->withUri($this->getUri()->withQuery($this->query));
    }

    /**
     * @throws InvalidArgumentException
     * @throws GuzzleException
     *
     * @return ResponseInterface
     * @psalm-suppress InvalidThrow
     */
    public function send(array $options = [])
    {
        if (is_null($this->client)) {
            throw new InvalidArgumentException();
        }

        return $this->client->send($this, $options);
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    /**
     * @psalm-param array<string, scalar|scalar[]> $headers
     * @psalm-param string|string[] $defaultValue
     * @psalm-return array<string, scalar|scalar[]>
     *
     * @param array|scalar $defaultValue
     */
    protected function ensureHeader(array $headers, string $header, $defaultValue): array
    {
        $normalizedHeader = strtolower($header);
        foreach ($headers as $headerName => $value) {
            $normalized = strtolower($headerName);
            if ($normalized !== $normalizedHeader) {
                continue;
            }

            return $headers;
        }
        $headers[$header] = $defaultValue;

        return $headers;
    }
}
