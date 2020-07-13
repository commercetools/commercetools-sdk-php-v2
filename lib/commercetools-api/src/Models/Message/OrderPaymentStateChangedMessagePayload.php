<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderPaymentStateChangedMessagePayload extends MessagePayload
{
    public const FIELD_PAYMENT_STATE = 'paymentState';
    public const FIELD_OLD_PAYMENT_STATE = 'oldPaymentState';

    /**
     * @return null|string
     */
    public function getPaymentState();

    /**
     * @return null|string
     */
    public function getOldPaymentState();

    /**
     * @param ?string $paymentState
     */
    public function setPaymentState(?string $paymentState): void;

    /**
     * @param ?string $oldPaymentState
     */
    public function setOldPaymentState(?string $oldPaymentState): void;
}
