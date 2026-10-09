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

interface CartAddRecurringPaymentAllocationAction extends CartUpdateAction
{
    public const FIELD_ID = 'id';
    public const FIELD_PAYMENT_METHOD = 'paymentMethod';
    public const FIELD_ALLOCATION = 'allocation';

    /**
     * <p>Unique identifier of the new <a href="ctp:api:type:RecurringPaymentAllocation">RecurringPaymentAllocation</a> within the <a href="ctp:api:type:RecurringPaymentConfiguration">RecurringPaymentConfiguration</a>.</p>
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

     * @return null|AllocationDraft
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
     * @param ?AllocationDraft $allocation
     */
    public function setAllocation(?AllocationDraft $allocation): void;
}
