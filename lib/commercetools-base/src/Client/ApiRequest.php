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
use GuzzleHttp\Psr7;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\ResponseInterface;
use stdClass;

/** @psalm-suppress PropertyNotSetInConstructor */
class ApiRequest extends Request
{
    /** @psalm-var array<string, scalar[]> */
    private $queryParts;
    /** @psalm-var string */
    private $query;

    /**
     * @psalm-var ClientInterface|null
     * @readonly
     */
    private $client;

    /**
     * @psalm-param array<string, scalar|scalar[]> $headers
     * @param string|null|resource|\Psr\Http\Message\StreamInterface $body
     */
    public function __construct(?ClientInterface $client, string $method, string $uri, array $headers = [], $body = null, string $version = '1.1')
    {
        $this->client = $client;
        $headers = $this->ensureHeader($headers, 'Content-Type', 'application/json');

        parent::__construct($method, $uri, $headers, $body, $version);
    }

    /**
     * @psalm-param array<string, scalar|scalar[]> $headers
     * @psalm-param string|string[] $defaultValue
     * @psalm-return array<string, scalar|scalar[]>
     * @param array $headers
     * @param string $header
     * @param scalar|array $defaultValue
     * @return array
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

    /**
     * @param string $parameterName
     * @psalm-param scalar|scalar[] $value
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
        if (is_array($value)) {
            foreach ($value as $v) {
                $this->queryParts[$parameterName][] = $v;
            }
        } else {
            $this->queryParts[$parameterName][] = $value;
        }
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);

        return $this->withUri($this->getUri()->withQuery($this->query));
    }
    
    /**
     * @param array $options
     * @throws InvalidArgumentException
     * @throws GuzzleException
     * @psalm-suppress InvalidThrow
     */
    public function send(array $options = []): ResponseInterface
    {
        if (is_null($this->client)) {
            throw new InvalidArgumentException();
        }
        return $this->client->send($this, $options);
    }

    /**
     * @param array $options
     * @throws InvalidArgumentException
     * @throws GuzzleException
     * @psalm-suppress InvalidThrow
     */
    public function sendAsync(array $options = []): PromiseInterface
    {
        if (is_null($this->client)) {
            throw new InvalidArgumentException();
        }
        return $this->client->sendAsync($this, $options);
    }

    public function getClient(): ?ClientInterface
    {
        return $this->client;
    }

    /**
     * @psalm-return stdClass
     */
    final protected function responseData(ResponseInterface $response)
    {
        $body = (string)$response->getBody();
        /** @psalm-var ?stdClass $data */
        $data = json_decode($body);
        if (is_null($data)) {
            throw new InvalidArgumentException();
        }
        return $data;
    }
}
