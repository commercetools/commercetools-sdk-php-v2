<?php
declare(strict_types=1);

namespace Commercetools\Client;

use GuzzleHttp\Client;

class RefreshFlowTokenProvider implements TokenProvider
{
    const GRANT_TYPE = 'grant_type';
    const GRANT_TYPE_REFRESH_TOKEN = 'refresh_token';
    const REFRESH_TOKEN = 'refresh_token';
    const ACCESS_TOKEN = 'access_token';
    const EXPIRES_IN = 'expires_in';

    /**
     * @var Client
     */
    private $client;

    /**
     * @var ClientCredentials
     */
    private $credentials;

    /**
     * @var string
     */
    private $accessTokenUrl;

    /**
     * @var TokenStorage
     */
    private $tokenStorage;

    public function __construct(
        Client $client,
        string $accessTokenUrl,
        ClientCredentials $credentials,
        TokenStorage $tokenStorage
    ) {
        $this->accessTokenUrl = $accessTokenUrl;
        $this->client = $client;
        $this->credentials = $credentials;
        $this->tokenStorage = $tokenStorage;
    }

    public function getToken(): Token
    {
        return $this->refreshToken();
    }

    /**
     * @return Token
     */
    public function refreshToken(): Token
    {
        $refreshToken = $this->tokenStorage->getRefreshToken();
        $data = [
            self::GRANT_TYPE => self::GRANT_TYPE_REFRESH_TOKEN,
            self::REFRESH_TOKEN => $refreshToken
        ];
        $options = [
            'form_params' => $data,
            'auth' => [$this->credentials->getClientId(), $this->credentials->getClientSecret()]
        ];

        $result = $this->client->post($this->accessTokenUrl, $options);

        /** @psalm-var array $body */
        $body = json_decode((string)$result->getBody(), true);
        $token = new RefreshableTokenModel(
            (string)$body[self::ACCESS_TOKEN],
            (int)$body[self::EXPIRES_IN],
            $refreshToken
        );

        return $token;
    }
}
