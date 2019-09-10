<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client;

use Commercetools\Client\ClientCredentialsConfig as BaseClientCredentialsConfig;

class ClientCredentialsConfig extends AuthConfig implements BaseClientCredentialsConfig
{
    const AUTH_URI = 'https://auth.sphere.io/oauth/token';

    const GRANT_TYPE = 'client_credentials';

    /** @var string */
    private $clientId;

    /** @var string */
    private $clientSecret;

    /** @var ?string */
    private $scope;

    /**
     * @psalm-param array<string, string> $authConfig
     */
    public function __construct(array $authConfig = [])
    {
        parent::__construct($authConfig);
        $this->clientId = isset($authConfig[self::CLIENT_ID]) ? $authConfig[self::CLIENT_ID] : '';
        $this->clientSecret = isset($authConfig[self::CLIENT_SECRET]) ? $authConfig[self::CLIENT_SECRET] : '';
        $this->scope = isset($authConfig[self::SCOPE]) ? $authConfig[self::SCOPE] : null;
    }

    public function getClientId(): string
    {
        return $this->clientId;
    }

    public function getScope(): ?string
    {
        return $this->scope;
    }

    public function setScope(string $scope = null): BaseClientCredentialsConfig
    {
        $this->scope = $scope;

        return $this;
    }

    public function setClientId(string $clientId): BaseClientCredentialsConfig
    {
        $this->clientId = $clientId;

        return $this;
    }

    public function getClientSecret(): string
    {
        return $this->clientSecret;
    }

    public function setClientSecret(string $clientSecret): BaseClientCredentialsConfig
    {
        $this->clientSecret = $clientSecret;

        return $this;
    }

    public function getCacheKey(): string
    {
        return sha1($this->clientId.(string) $this->scope);
    }
}
