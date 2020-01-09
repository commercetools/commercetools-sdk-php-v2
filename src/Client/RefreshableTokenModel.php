<?php

declare(strict_types=1);

namespace Commercetools\Client;

class RefreshableTokenModel implements Token
{
    /** @var string */
    private $value;

    /** @var int */
    private $expiresIn;

    /** @var ?string */
    private $refreshToken;

    public function __construct(string $value, int $expiresIn = null, ?string $refreshToken = null)
    {
        $this->value = $value;
        $this->expiresIn = $expiresIn ?? 0;
        $this->refreshToken = $refreshToken;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function getExpiresIn(): int
    {
        return $this->expiresIn;
    }

    public function getRefreshToken(): ?string
    {
        return $this->refreshToken;
    }
}
