<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */


namespace Commercetools\Client;

use GuzzleHttp\ClientInterface;

class ApiResource
{
    /**
     * @var string
     * @readonly
     */
    private $uri;

    /**
     * @psalm-var array<string, string>
     * @readonly
     */
    private $args = [];

    /**
     * @var ?ClientInterface
     * @readonly
     */
    private $client;

    /**
     * @param string $uri
     * @psalm-param array<string, string> $args
     */
    public function __construct(string $uri = '', array $args = [], ?ClientInterface $client = null)
    {
        $this->uri = $uri;
        $this->args = $args;
        $this->client = $client;
    }

    /**
     * @return string
     */
    final public function getUri(): string
    {
        return $this->uri;
    }

    /**
     * @psalm-return array<string, string>
     */
    final public function getArgs(): array
    {
        return $this->args;
    }

    final public function getClient(): ?ClientInterface
    {
        return $this->client;
    }
}
