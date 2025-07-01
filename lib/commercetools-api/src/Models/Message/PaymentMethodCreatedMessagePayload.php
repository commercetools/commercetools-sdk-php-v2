<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\PaymentMethod\PaymentMethod;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentMethodCreatedMessagePayload extends MessagePayload
{
    public const FIELD_PAYMENT_METHOD = 'paymentMethod';

    /**
     * <p><a href="ctp:api:type:PaymentMethod">PaymentMethod</a> that was created.</p>
     *

     * @return null|PaymentMethod
     */
    public function getPaymentMethod();

    /**
     * @param ?PaymentMethod $paymentMethod
     */
    public function setPaymentMethod(?PaymentMethod $paymentMethod): void;
}
