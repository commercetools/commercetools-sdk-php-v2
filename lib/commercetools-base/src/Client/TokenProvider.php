<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */


namespace Commercetools\Client;

interface TokenProvider
{
    public function getToken(): Token;

    public function refreshToken(): Token;
}
