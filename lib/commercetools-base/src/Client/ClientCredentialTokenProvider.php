<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/

namespace Commercetools\Client;

use GuzzleHttp\Client;

class ClientCredentialTokenProvider implements TokenProvider
{
    const GRANT_TYPE = 'grant_type';
    const CLIENT_ID = 'clientId';
    const CLIENT_SECRET = 'clientSecret';
    const SCOPE = 'scope';
    const ACCESS_TOKEN = 'access_token';
    const EXPIRES_IN = 'expires_in';

    /** @var Client */
    private $client;

    /** @var ClientCredentialsConfig */
    private $authConfig;

    public function __construct(Client $client, ClientCredentialsConfig $authConfig)
    {
        $this->authConfig = $authConfig;
        $this->client = $client;
    }

    public function getToken(): Token
    {
        $data = [
            self::GRANT_TYPE => $this->authConfig->getGrantType()
        ];
        if (!is_null($this->authConfig->getScope())) {
            $data[self::SCOPE] = $this->authConfig->getScope();
        }
        $options = [
            'form_params' => $data,
            'auth' => [$this->authConfig->getClientId(), $this->authConfig->getClientSecret()]
        ];

        $result = $this->client->post($this->authConfig->getAuthUri(), $options);

        /** @var array $body */
        $body = json_decode((string)$result->getBody(), true);
        return new TokenModel((string)$body[self::ACCESS_TOKEN], (int)$body[self::EXPIRES_IN]);
    }

    /**
     * @return Token
     */
    public function refreshToken(): Token
    {
        return $this->getToken();
    }
}