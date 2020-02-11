<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface OrderChangePaymentStateAction extends OrderUpdateAction
{

    public const FIELD_PAYMENT_STATE = 'paymentState';

    /**
     * @return null|string
     */
    public function getPaymentState();

    public function setPaymentState(?string $paymentState): void;
}
