<?php

declare(strict_types=1);

namespace Commercetools\Client;

use GuzzleHttp\Client;

class AnonymousFlowTokenProvider implements TokenProvider
{
    public const GRANT_TYPE = 'grant_type';
    public const GRANT_TYPE_CLIENT_CREDENTIALS = 'client_credentials';
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
     * @var RefreshFlowTokenProvider
     */
    private $refreshTokenProvider;

    /**
     * @var ?AnonymousIdProvider
     */
    private $anonymousIdProvider;

    public function __construct(
        Client $client,
        string $accessTokenUrl,
        ClientCredentials $credentials,
        RefreshFlowTokenProvider $refreshTokenProvider,
        ?AnonymousIdProvider $anonymousIdProvider = null
    ) {
        $this->accessTokenUrl = $accessTokenUrl;
        $this->client = $client;
        $this->credentials = $credentials;
        $this->refreshTokenProvider = $refreshTokenProvider;
        $this->anonymousIdProvider = $anonymousIdProvider;
    }

    public function getToken(): Token
    {
        $data = [
            self::GRANT_TYPE => self::GRANT_TYPE_CLIENT_CREDENTIALS,
        ];
        if (!is_null($this->anonymousIdProvider)) {
            $data['anonymous_id'] = $this->anonymousIdProvider->getAnonymousId();
        }
        $options = [
            'form_params' => $data,
            'auth' => [$this->credentials->getClientId(), $this->credentials->getClientSecret()],
        ];

        $result = $this->client->post($this->accessTokenUrl, $options);

        /** @psalm-var array $body */
        $body = json_decode((string) $result->getBody(), true);

        return new RefreshableTokenModel(
            (string) $body[self::ACCESS_TOKEN],
            (int) $body[self::EXPIRES_IN],
            (string) $body[self::REFRESH_TOKEN]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function refreshToken(): Token
    {
        return $this->refreshTokenProvider->refreshToken();
    }
}
