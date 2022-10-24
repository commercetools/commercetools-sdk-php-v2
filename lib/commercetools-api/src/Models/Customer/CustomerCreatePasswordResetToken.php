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
     * <p>Email address of the Customer treated as <a href="/../api/customers-overview#email-case-insensitivity">case-insensitive</a>.</p>
     *

     * @return null|string
     */
    public function getEmail();

    /**
     * <p>Validity period of the generated token in minutes.</p>
     *

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
