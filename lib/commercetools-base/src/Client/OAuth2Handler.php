<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Client;

use Psr\Http\Message\RequestInterface;

class OAuth2Handler
{
    /** @psalm-var TokenProvider */
    private $provider;

    /**
     * OAuth2Handler constructor.
     */
    public function __construct(TokenProvider $provider)
    {
        $this->provider = $provider;
    }

    public function __invoke(RequestInterface $request, array $options = []): RequestInterface
    {
        return $request->withHeader('Authorization', $this->getAuthorizationHeader());
    }

    public function getAuthorizationHeader(): string
    {
        return 'Bearer '.$this->provider->getToken()->getValue();
    }

    public function refreshToken(): Token
    {
        return $this->provider->refreshToken();
    }
}
