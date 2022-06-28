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

interface OrderPaymentAddedMessagePayload extends MessagePayload
{
    public const FIELD_PAYMENT = 'payment';

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to a <a href="ctp:api:type:Payment">Payment</a>.</p>
     *
     * @return null|PaymentReference
     */
    public function getPayment();

    /**
     * @param ?PaymentReference $payment
     */
    public function setPayment(?PaymentReference $payment): void;
}
