<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Payment\Payment;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentCreatedMessage extends Message
{
    public const FIELD_PAYMENT = 'payment';

    /**

     * @return null|Payment
     */
    public function getPayment();

    /**
     * @param ?Payment $payment
     */
    public function setPayment(?Payment $payment): void;
}
