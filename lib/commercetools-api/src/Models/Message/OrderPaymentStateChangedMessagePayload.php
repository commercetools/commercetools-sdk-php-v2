<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderPaymentStateChangedMessagePayload extends OrderMessagePayload
{
    public const FIELD_PAYMENT_STATE = 'paymentState';
    public const FIELD_OLD_PAYMENT_STATE = 'oldPaymentState';

    /**
     * <p><a href="ctp:api:type:PaymentState">PaymentState</a> after the <a href="ctp:api:type:OrderChangePaymentStateAction">Change Payment State</a> update action.</p>
     *

     * @return null|string
     */
    public function getPaymentState();

    /**
     * <p><a href="ctp:api:type:PaymentState">PaymentState</a> before the <a href="ctp:api:type:OrderChangePaymentStateAction">Change Payment State</a> update action.</p>
     *

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
