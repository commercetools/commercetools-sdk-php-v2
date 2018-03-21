<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Client;

class TokenModel implements Token
{
    /**
     * @return string
     */
    private $value;

    /**
     * @return int
     */
    private $expiresIn;

    /**
     * @param string $value
     * @param int $expiresIn
     */
    public function __construct(string $value, int $expiresIn)
    {
        $this->value = $value;
        $this->expiresIn = $expiresIn;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @return int
     */
    public function getExpiresIn(): int
    {
        return $this->expiresIn;
    }
}
