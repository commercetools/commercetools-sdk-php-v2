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
interface Token
{
    public function getValue(): string;

    public function getExpiresIn(): int;
}
