<?php

declare(strict_types=1);

namespace Commercetools\Client;

use GuzzleHttp\Client;

class MeOAuthHandlerFactory
{
    public static function ofAuthConfig(MeConfig $authConfig, TokenStorage $tokenStorage): OAuth2Handler
    {
        $provider = ProviderFactory::of()->createTokenStorageProvider(
            $authConfig->getAnonUri(),
            $authConfig->getRefreshUri(),
            $authConfig->getCredentials(),
            new Client($authConfig->getClientOptions()),
            $tokenStorage
        );

        return new OAuth2Handler($provider);
    }
}
