<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Client;

use GuzzleHttp\Client;

class ClientCredentialTokenProvider implements TokenProvider
{
    const GRANT_TYPE_CLIENT_CREDENTIALS = 'client_credentials';
    const GRANT_TYPE = 'grant_type';
    const SCOPE = 'scope';
    const ACCESS_TOKEN = 'access_token';
    const EXPIRES_IN = 'expires_in';

    /** @var Client */
    private $client;

    /** @var string */
    private $accessTokenUrl;

    /** @var ClientCredentials */
    private $credentials;

    public function __construct(Client $client, string $accessTokenUrl, ClientCredentials $credentials)
    {
        $this->client = $client;
        $this->accessTokenUrl = $accessTokenUrl;
        $this->credentials = $credentials;
    }

    public function getToken(): Token
    {
        $data = [
            self::GRANT_TYPE => self::GRANT_TYPE_CLIENT_CREDENTIALS,
        ];
        if (!is_null($this->credentials->getScope())) {
            $data[self::SCOPE] = $this->credentials->getScope();
        }
        $options = [
            'form_params' => $data,
            'auth' => [$this->credentials->getClientId(), $this->credentials->getClientSecret()],
        ];

        $result = $this->client->post($this->accessTokenUrl, $options);

        /** @var array $body */
        $body = json_decode((string) $result->getBody(), true);

        return new TokenModel((string) $body[self::ACCESS_TOKEN], (int) $body[self::EXPIRES_IN]);
    }

    /**
     * @return Token
     */
    public function refreshToken(): Token
    {
        return $this->getToken();
    }
}
