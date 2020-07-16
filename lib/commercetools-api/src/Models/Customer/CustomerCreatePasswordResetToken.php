<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

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

    /**
     * @param ?string $email
     */
    public function setEmail(?string $email): void;

    /**
     * @param ?int $ttlMinutes
     */
    public function setTtlMinutes(?int $ttlMinutes): void;
}
