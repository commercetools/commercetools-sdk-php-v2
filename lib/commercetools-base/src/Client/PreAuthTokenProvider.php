<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Client;

class PreAuthTokenProvider implements TokenProvider
{
    const TOKEN = 'token';

    /** @psalm-var Token */
    private $token;

    public function __construct(Token $token)
    {
        $this->token = $token;
    }

    public function getToken(): Token
    {
        return $this->token;
    }

    public function refreshToken(): Token
    {
        return $this->token;
    }
}
