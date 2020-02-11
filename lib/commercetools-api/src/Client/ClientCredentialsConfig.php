<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */


namespace Commercetools\Api\Client;

use Commercetools\Client\ClientCredentials;
use Commercetools\Client\ClientCredentialsConfig as BaseClientCredentialsConfig;

class ClientCredentialsConfig extends BaseAuthConfig implements BaseClientCredentialsConfig
{
    public const AUTH_URI = '{accessTokenUri}';

    public const GRANT_TYPE = 'client_credentials';

    /** @psalm-var ClientCredentials */
    private $credentials;

    public function __construct(ClientCredentials $credentials, string $accessTokenUri = null, array $clientOptions = [], string $authUri = self::AUTH_URI)
    {
        parent::__construct($accessTokenUri, $clientOptions, $authUri);
        $this->credentials = $credentials;
    }

    public function getCredentials(): ClientCredentials
    {
        return $this->credentials;
    }
}
