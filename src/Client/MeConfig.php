<?php

declare(strict_types=1);

namespace Commercetools\Client;

use Commercetools\Api\Client\BaseAuthConfig;
use Commercetools\Client\ClientCredentialsConfig as BaseClientCredentialsConfig;

class MeConfig extends BaseAuthConfig implements BaseClientCredentialsConfig
{
    public const ANON_AUTH_URI = 'https://auth.europe-west1.gcp.commercetools.com/oauth/{projectKey}/anonymous/token';
    public const REFRESH_AUTH_URI = 'https://auth.europe-west1.gcp.commercetools.com/oauth/token';

    public const GRANT_TYPE = 'client_credentials';

    /** @var ClientCredentials */
    private $credentials;

    /** @var string */
    private $anonUri;

    /** @var string */
    private $refreshUri;

    public function __construct(
        string $projectKey,
        ClientCredentials $credentials,
        array $clientOptions = [],
        ?string $anonUri = null,
        ?string $refreshUri = null,
        string $authUri = self::AUTH_URI
    ) {
        parent::__construct($clientOptions, $authUri);
        $anonUri = $anonUri ?? self::ANON_AUTH_URI;
        $anonUri = str_replace('{projectKey}', $projectKey, $anonUri);
        $this->anonUri = $anonUri;
        $this->refreshUri = $refreshUri ?? self::REFRESH_AUTH_URI;
        $this->credentials = $credentials;
    }

    public function getCredentials(): ClientCredentials
    {
        return $this->credentials;
    }

    public function getAnonUri(): string
    {
        return $this->anonUri;
    }

    public function getRefreshUri(): string
    {
        return $this->refreshUri;
    }
}
