<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Error\RecurringOrderFailureErrorCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface RecurringOrderFailedMessage extends Message
{
    public const FIELD_CART_ID = 'cartId';
    public const FIELD_FAILED_AT = 'failedAt';
    public const FIELD_FAILURE_REASON = 'failureReason';
    public const FIELD_ORDER_SCHEDULED_AT = 'orderScheduledAt';
    public const FIELD_ERRORS = 'errors';

    /**
     * <p>ID of the <a href="ctp:api:type:Cart">Cart</a> used in the failed Order creation attempt.</p>
     *

     * @return null|string
     */
    public function getCartId();

    /**
     * <p>Date and time (UTC) when the Order creation attempt failed.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getFailedAt();

    /**
     * <p>Description of why the Order creation failed, such as insufficient stock.</p>
     *

     * @return null|string
     */
    public function getFailureReason();

    /**
     * <p>Date and time (UTC) the Order was scheduled to be created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getOrderScheduledAt();

    /**
     * <p>Errors due to which the Order creation failed.</p>
     *

     * @return null|RecurringOrderFailureErrorCollection
     */
    public function getErrors();

    /**
     * @param ?string $cartId
     */
    public function setCartId(?string $cartId): void;

    /**
     * @param ?DateTimeImmutable $failedAt
     */
    public function setFailedAt(?DateTimeImmutable $failedAt): void;

    /**
     * @param ?string $failureReason
     */
    public function setFailureReason(?string $failureReason): void;

    /**
     * @param ?DateTimeImmutable $orderScheduledAt
     */
    public function setOrderScheduledAt(?DateTimeImmutable $orderScheduledAt): void;

    /**
     * @param ?RecurringOrderFailureErrorCollection $errors
     */
    public function setErrors(?RecurringOrderFailureErrorCollection $errors): void;
}
