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
    /**
     * The constructor of the ClientCredentials class.
     *
     * @param string $clientId
     *   The client id.
     * @param string $clientSecret
     *   The client secret.
     * @param string $scope
     *   Provide the scope when you want to request a specific ones for the client.
     *   Can be omitted to use all scopes of the oauth client.
     *   Format: `<the scope name>:<the project key>`.
     *   Example: `manage_products:project1`.
     */
    public function __construct(string $clientId, string $clientSecret, ?string $scope)
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->scope = $scope;
        $this->cacheKey = sha1($clientId . $scope);
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
