<?php

declare(strict_types=1);

namespace Commercetools\Client;

interface TokenStorage
{
    public function getRefreshToken(): ?string;

    public function getAccessToken(): ?string;

    public function setRefreshToken(?string $refreshToken): void;

    public function setAccessToken(?string $accessToken): void;
}
