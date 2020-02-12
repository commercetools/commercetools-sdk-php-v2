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

interface PaymentCreatedMessagePayload extends MessagePayload
{
    public const FIELD_PAYMENT = 'payment';

    /**
     * @return null|Payment
     */
    public function getPayment();

    public function setPayment(?Payment $payment): void;
}
