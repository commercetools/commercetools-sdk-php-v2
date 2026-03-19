<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Payment\PaymentReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderPaymentRemovedMessage extends Message
{
    public const FIELD_PAYMENT_REF = 'paymentRef';
    public const FIELD_REMOVED_PAYMENT_INFO = 'removedPaymentInfo';

    /**
     * <p><a href="ctp:api:type:Payment">Payment</a> that was removed from the <a href="ctp:api:type:Order">Order</a>.</p>
     *

     * @return null|PaymentReference
     */
    public function getPaymentRef();

    /**
     * <p>Indicates whether the removal of the Payment resulted in no Payments remaining on the Order. The value is <code>true</code> if all Payments have been removed (none remain), and <code>false</code> if there are still Payments associated with the Order after the removal.</p>
     *

     * @return null|bool
     */
    public function getRemovedPaymentInfo();

    /**
     * @param ?PaymentReference $paymentRef
     */
    public function setPaymentRef(?PaymentReference $paymentRef): void;

    /**
     * @param ?bool $removedPaymentInfo
     */
    public function setRemovedPaymentInfo(?bool $removedPaymentInfo): void;
}
