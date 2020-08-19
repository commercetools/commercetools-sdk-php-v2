<?php

declare(strict_types=1);

namespace Commercetools\Client;

use GuzzleHttp\Client;

class ProviderFactory
{
    public function createTokenStorageProvider(
        string $anonTokenUrl,
        string $refreshTokenUrl,
        ClientCredentials $credentials,
        Client $client,
        TokenStorage $storage,
        AnonymousIdProvider $anonymousIdProvider = null
    ): TokenStorageProvider {
        $refreshTokenProvider = $this->createRefreshFlowProvider($refreshTokenUrl, $credentials, $client, $storage);
        $anonProvider = $this->createAnonymousFlowProvider(
            $anonTokenUrl,
            $credentials,
            $client,
            $refreshTokenProvider,
            $anonymousIdProvider
        );

        return new TokenStorageProvider($storage, $anonProvider);
    }

    public function createPasswordFlowProvider(
        string $passwordTokenUrl,
        ClientCredentials $credentials,
        Client $client,
        TokenStorage $storage
    ): PasswordFlowTokenProvider {
        return new PasswordFlowTokenProvider($client, $passwordTokenUrl, $credentials, $storage);
    }

    public function createAnonymousFlowProvider(
        string $anonTokenUrl,
        ClientCredentials $credentials,
        Client $client,
        RefreshFlowTokenProvider $refreshFlowTokenProvider,
        AnonymousIdProvider $anonymousIdProvider = null
    ): AnonymousFlowTokenProvider {
        return new AnonymousFlowTokenProvider(
            $client,
            $anonTokenUrl,
            $credentials,
            $refreshFlowTokenProvider,
            $anonymousIdProvider
        );
    }

    public function createRefreshFlowProvider(
        string $refreshTokenUrl,
        ClientCredentials $credentials,
        Client $client,
        TokenStorage $storage
    ): RefreshFlowTokenProvider {
        return new RefreshFlowTokenProvider($client, $refreshTokenUrl, $credentials, $storage);
    }

    public static function of(): ProviderFactory
    {
        return new self();
    }
}
