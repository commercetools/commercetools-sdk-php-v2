<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\PaymentMethod\PaymentMethodReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface RecurringPaymentAllocation extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_PAYMENT_METHOD = 'paymentMethod';
    public const FIELD_ALLOCATION = 'allocation';

    /**
     * <p>Unique identifier of the RecurringPaymentAllocation within the <a href="ctp:api:type:RecurringPaymentConfiguration">RecurringPaymentConfiguration</a>. Use it to remove the allocation with the <a href="ctp:api:type:CartRemoveRecurringPaymentAllocationAction">Remove RecurringPaymentAllocation</a> update action.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Payment Method charged for this share of the Order total.</p>
     *

     * @return null|PaymentMethodReference
     */
    public function getPaymentMethod();

    /**
     * <p>Share of the Order total charged to the <code>paymentMethod</code>.</p>
     *

     * @return null|Allocation
     */
    public function getAllocation();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?PaymentMethodReference $paymentMethod
     */
    public function setPaymentMethod(?PaymentMethodReference $paymentMethod): void;

    /**
     * @param ?Allocation $allocation
     */
    public function setAllocation(?Allocation $allocation): void;
}
