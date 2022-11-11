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
    public const FIELD_DISCOUNT_CODE_ID = 'discountCodeId';
    public const FIELD_VALID_FROM = 'validFrom';
    public const FIELD_VALID_UNTIL = 'validUntil';
    public const FIELD_VALIDITY_CHECK_TIME = 'validityCheckTime';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p><code>&quot;The discountCode $discountCodeId cannot be applied to the cart.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * <p>Discount Code passed to the Cart.</p>
     *

     * @return null|string
     */
    public function getDiscountCode();

    /**
     * <p><code>&quot;DoesNotExist&quot;</code> or <code>&quot;TimeRangeNonApplicable&quot;</code></p>
     *

     * @return null|string
     */
    public function getReason();

    /**
     * <p>Unique identifier of the Discount Code.</p>
     *

     * @return null|string
     */
    public function getDiscountCodeId();

    /**
     * <p>Date and time (UTC) from which the Discount Code is valid.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidFrom();

    /**
     * <p>Date and time (UTC) until which the Discount Code is valid.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidUntil();

    /**
     * <p>Date and time (UTC) the Discount Code validity check was last performed.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidityCheckTime();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

    /**
     * @param ?string $discountCode
     */
    public function setDiscountCode(?string $discountCode): void;

    /**
     * @param ?string $reason
     */
    public function setReason(?string $reason): void;

    /**
     * @param ?string $discountCodeId
     */
    public function setDiscountCodeId(?string $discountCodeId): void;

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
