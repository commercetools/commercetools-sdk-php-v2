<?php
declare(strict_types=1);

namespace Commercetools\Client;

class TokenStorageProvider implements TokenProvider
{
    /**
     * @var TokenStorage
     */
    private $tokenStorage;

    /**
     * @var AnonymousFlowTokenProvider
     */
    private $anonymousProvider;

    /**
     * TokenStorageProvider constructor.
     * @param TokenStorage $tokenStorage
     * @param AnonymousFlowTokenProvider $anonymousProvider
     */
    public function __construct(TokenStorage $tokenStorage, AnonymousFlowTokenProvider $anonymousProvider)
    {
        $this->tokenStorage = $tokenStorage;
        $this->anonymousProvider = $anonymousProvider;
    }

    /**
     * @inheritDoc
     */
    public function refreshToken(): Token
    {
        $token = $this->anonymousProvider->refreshToken();
        $this->storeToken($token);

        return $token;
    }

    /**
     * @inheritDoc
     */
    public function getToken(): Token
    {
        $token = $this->tokenStorage->getAccessToken();
        if (!is_null($token)) {
            return new TokenModel($token);
        }

        if ($this->tokenStorage->getRefreshToken()) {
            return $this->refreshToken();
        }

        $token = $this->anonymousProvider->getToken();
        $this->storeToken($token);

        return $token;
    }

    private function storeToken(Token $token): void
    {
        $this->tokenStorage->setAccessToken($token->getValue());
        if ($token instanceof RefreshableTokenModel) {
            $this->tokenStorage->setRefreshToken($token->getRefreshToken());
        }
    }
}
