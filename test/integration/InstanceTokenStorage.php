<?php

namespace Commercetools\IntegrationTest;

use Commercetools\Client\TokenStorage;

class InstanceTokenStorage implements TokenStorage
{
    private $accessToken;
    private $refreshToken;

    public function getRefreshToken(): ?string
    {
        return $this->refreshToken;
    }

    public function getAccessToken(): ?string
    {
        return $this->accessToken;
    }

    public function setRefreshToken(?string $refreshToken): void
    {
        $this->refreshToken = $refreshToken;
    }

    public function setAccessToken(?string $accessToken): void
    {
        $this->accessToken = $accessToken;
    }
}
