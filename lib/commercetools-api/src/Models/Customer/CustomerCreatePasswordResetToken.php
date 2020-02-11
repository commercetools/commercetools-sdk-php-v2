<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface CustomerCreatePasswordResetToken extends JsonObject
{

    public const FIELD_EMAIL = 'email';
    public const FIELD_TTL_MINUTES = 'ttlMinutes';

    /**
     * @return null|string
     */
    public function getEmail();

    /**
     * @return null|int
     */
    public function getTtlMinutes();

    public function setEmail(?string $email): void;

    public function setTtlMinutes(?int $ttlMinutes): void;
}
