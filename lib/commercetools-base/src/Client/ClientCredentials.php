<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Client;

class ClientCredentials
{
    /** @var string */
    private $clientId;

    /** @var string */
    private $clientSecret;

    /** @var ?string */
    private $scope;

    public function __construct(string $clientId, string $clientSecret, string $scope = null)
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->scope = $scope;
    }

    public function getClientId(): string
    {
        return $this->clientId;
    }

    public function getScope(): ?string
    {
        return $this->scope;
    }

    public function getClientSecret(): string
    {
        return $this->clientSecret;
    }

    public function getCacheKey(): string
    {
        return sha1($this->clientId.(string) $this->scope);
    }
}
