<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface DiscountCodeNonApplicableError extends ErrorObject
{
    public const FIELD_DISCOUNT_CODE = 'discountCode';
    public const FIELD_REASON = 'reason';
    public const FIELD_DICOUNT_CODE_ID = 'dicountCodeId';
    public const FIELD_VALID_FROM = 'validFrom';
    public const FIELD_VALID_UNTIL = 'validUntil';
    public const FIELD_VALIDITY_CHECK_TIME = 'validityCheckTime';

    /**
     * @return null|string
     */
    public function getDiscountCode();

    /**
     * @return null|string
     */
    public function getReason();

    /**
     * @return null|string
     */
    public function getDicountCodeId();

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidFrom();

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidUntil();

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidityCheckTime();

    /**
     * @param ?string $discountCode
     */
    public function setDiscountCode(?string $discountCode): void;

    /**
     * @param ?string $reason
     */
    public function setReason(?string $reason): void;

    /**
     * @param ?string $dicountCodeId
     */
    public function setDicountCodeId(?string $dicountCodeId): void;

    /**
     * @param ?DateTimeImmutable $validFrom
     */
    public function setValidFrom(?DateTimeImmutable $validFrom): void;

    /**
     * @param ?DateTimeImmutable $validUntil
     */
    public function setValidUntil(?DateTimeImmutable $validUntil): void;

    /**
     * @param ?DateTimeImmutable $validityCheckTime
     */
    public function setValidityCheckTime(?DateTimeImmutable $validityCheckTime): void;
}
