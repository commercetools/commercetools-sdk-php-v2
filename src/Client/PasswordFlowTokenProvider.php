<?php

declare(strict_types=1);

namespace Commercetools\Client;

use GuzzleHttp\Client;

class PasswordFlowTokenProvider
{
    public const GRANT_TYPE = 'grant_type';
    public const GRANT_TYPE_PASSWORD = 'password';
    public const REFRESH_TOKEN = 'refresh_token';
    public const ACCESS_TOKEN = 'access_token';
    public const EXPIRES_IN = 'expires_in';

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

    public function getTokenFor(string $userName, string $password): Token
    {
        $data = [
            self::GRANT_TYPE => self::GRANT_TYPE_PASSWORD,
            'username' => $userName,
            'password' => $password,
        ];
        $options = [
            'form_params' => $data,
            'auth' => [$this->credentials->getClientId(), $this->credentials->getClientSecret()],
        ];

        $result = $this->client->post($this->accessTokenUrl, $options);

        /** @psalm-var array $body */
        $body = json_decode((string) $result->getBody(), true);
        $token = new RefreshableTokenModel(
            (string) $body[self::ACCESS_TOKEN],
            (int) $body[self::EXPIRES_IN],
            (string) $body[self::REFRESH_TOKEN]
        );

        $this->tokenStorage->setAccessToken($token->getValue());
        $this->tokenStorage->setRefreshToken($token->getRefreshToken());

        return $token;
    }
}
