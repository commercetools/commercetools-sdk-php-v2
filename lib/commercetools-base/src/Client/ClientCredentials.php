<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */


namespace Commercetools\Client;

/**
 * @psalm-immutable
 */
class ClientCredentials
{
    /** @psalm-var string */
    private $clientId;

    /** @psalm-var string */
    private $clientSecret;

    /** @psalm-var ?string */
    private $scope;
    
    /** @psalm-var string */
    private $cacheKey;

    public function __construct(string $clientId, string $clientSecret, string $scope = null)
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->scope = $scope;
        $this->cacheKey = sha1($clientId . (string)$scope);
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
        return $this->cacheKey;
    }
}
