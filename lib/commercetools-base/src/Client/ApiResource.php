<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Client;

use GuzzleHttp\Client;

class ApiResource
{
    /**
     * @var string
     */
    private $uri;

    /**
     * @psalm-var array<string, scalar>
     */
    private $args = [];

    /**
     * @var ?Client
     */
    private $client;

    /**
     * @psalm-param array<string, scalar> $args
     */
    public function __construct(string $uri = '', array $args = [], Client $client = null)
    {
        $this->uri = $uri;
        $this->args = $args;
        $this->client = $client;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    final protected function getUri(): string
    {
        return $this->uri;
    }

    /**
     * @psalm-return array<string, scalar>
     */
    final protected function getArgs(): array
    {
        return $this->args;
    }
}
