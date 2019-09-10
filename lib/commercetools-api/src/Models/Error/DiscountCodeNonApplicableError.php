<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use DateTimeImmutable;

interface DiscountCodeNonApplicableError extends ErrorObject
{
    const FIELD_DISCOUNT_CODE = 'discountCode';
    const FIELD_REASON = 'reason';
    const FIELD_DICOUNT_CODE_ID = 'dicountCodeId';
    const FIELD_VALID_FROM = 'validFrom';
    const FIELD_VALID_UNTIL = 'validUntil';
    const FIELD_VALIDITY_CHECK_TIME = 'validityCheckTime';

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

    public function setDiscountCode(?string $discountCode): void;

    public function setReason(?string $reason): void;

    public function setDicountCodeId(?string $dicountCodeId): void;

    public function setValidFrom(?DateTimeImmutable $validFrom): void;

    public function setValidUntil(?DateTimeImmutable $validUntil): void;

    public function setValidityCheckTime(?DateTimeImmutable $validityCheckTime): void;
}
