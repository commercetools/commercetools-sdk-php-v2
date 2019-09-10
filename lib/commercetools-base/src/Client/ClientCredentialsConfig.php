<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/

namespace Commercetools\Client;

interface ClientCredentialsConfig extends AuthConfig
{
    const CLIENT_ID = 'clientId';
    const CLIENT_SECRET = 'clientSecret';
    const SCOPE = 'scope';

    public function getClientId(): string;

    public function getScope(): ?string;

    public function setScope(string $scope = null): ClientCredentialsConfig;

    public function setClientId(string $clientId): ClientCredentialsConfig;

    public function getClientSecret(): string;

    public function setClientSecret(string $clientSecret): ClientCredentialsConfig;

    public function getCacheKey(): string;
}