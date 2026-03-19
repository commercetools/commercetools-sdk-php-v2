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

interface OrderPaymentAddedMessage extends Message
{
    public const FIELD_PAYMENT_REF = 'paymentRef';

    /**
     * <p><a href="ctp:api:type:Payment">Payment</a> that was added to the <a href="ctp:api:type:Order">Order</a>.</p>
     *

     * @return null|PaymentReference
     */
    public function getPaymentRef();

    /**
     * @param ?PaymentReference $paymentRef
     */
    public function setPaymentRef(?PaymentReference $paymentRef): void;
}
