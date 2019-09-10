<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

interface OrderPaymentStateChangedMessagePayload extends MessagePayload
{
    const FIELD_PAYMENT_STATE = 'paymentState';
    const FIELD_OLD_PAYMENT_STATE = 'oldPaymentState';

    /**
     * @return null|string
     */
    public function getPaymentState();

    /**
     * @return null|string
     */
    public function getOldPaymentState();

    public function setPaymentState(?string $paymentState): void;

    public function setOldPaymentState(?string $oldPaymentState): void;
}
