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
    public const FIELD_INVALIDATE_OLDER_TOKENS = 'invalidateOlderTokens';

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
     * <p>If set to <code>true</code>, all password tokens issued previously for the Customer will be invalidated.</p>
     *

     * @return null|bool
     */
    public function getInvalidateOlderTokens();

    /**
     * @param ?string $email
     */
    public function setEmail(?string $email): void;

    /**
     * @param ?int $ttlMinutes
     */
    public function setTtlMinutes(?int $ttlMinutes): void;

    /**
     * @param ?bool $invalidateOlderTokens
     */
    public function setInvalidateOlderTokens(?bool $invalidateOlderTokens): void;
}
