<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */


namespace Commercetools\Client;

/**
 * @psalm-immutable
 */
class TokenModel implements Token
{
    /**
     * @psalm-var string
     * @readonly
     */
    private $value;

    /**
     * @psalm-var int
     * @readonly
     */
    private $expiresIn;

    public function __construct(string $value, ?int $expiresIn = null)
    {
        $this->value = $value;
        $this->expiresIn = $expiresIn ?? 0;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function getExpiresIn(): int
    {
        return $this->expiresIn;
    }
}
