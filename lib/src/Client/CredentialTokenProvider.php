<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Client;

use GuzzleHttp\Client;

class CredentialTokenProvider implements TokenProvider
{
    const GRANT_TYPE = 'grant_type';
    const GRANT_TYPE_CLIENT_CREDENTIALS = 'client_credentials';
    const CLIENT_ID = 'clientId';
    const CLIENT_SECRET = 'clientSecret';
    const SCOPE = 'scope';
    const ACCESS_TOKEN = 'access_token';
    const EXPIRES_IN = 'expires_in';

    /**
     * @var Client
     */
    private $client;

    /**
     * @var array
     */
    private $credentials;

    /**
     * @var string
     */
    private $accessTokenUrl;

    /**
     * @param Client $client
     * @param string $accessTokenUrl
     * @param array $credentials
     */
    public function __construct(Client $client, string $accessTokenUrl, array $credentials)
    {
        $this->accessTokenUrl = $accessTokenUrl;
        $this->client = $client;
        $this->credentials = $credentials;
    }

    /**
     * @return Token
     */
    public function getToken(): Token
    {
        $data = [
            self::GRANT_TYPE => self::GRANT_TYPE_CLIENT_CREDENTIALS
        ];
        if (isset($this->credentials[self::SCOPE])) {
            $data[self::SCOPE] = $this->credentials[self::SCOPE];
        }
        $options = [
            'form_params' => $data,
            'auth' => [$this->credentials[self::CLIENT_ID], $this->credentials[self::CLIENT_SECRET]]
        ];

        $result = $this->client->post($this->accessTokenUrl, $options);

        $body = json_decode((string)$result->getBody(), true);
        return new TokenModel((string)$body[self::ACCESS_TOKEN], (int)$body[self::EXPIRES_IN]);
    }
}
