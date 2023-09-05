<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderChangePaymentStateAction extends OrderUpdateAction
{
    public const FIELD_PAYMENT_STATE = 'paymentState';

    /**
     * <p>New payment status of the Order.</p>
     *

     * @return null|string
     */
    public function getPaymentState();

    /**
     * @param ?string $paymentState
     */
    public function setPaymentState(?string $paymentState): void;
}
