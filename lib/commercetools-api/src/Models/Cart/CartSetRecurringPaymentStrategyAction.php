<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartSetRecurringPaymentStrategyAction extends CartUpdateAction
{
    public const FIELD_PAYMENT_STRATEGY = 'paymentStrategy';

    /**
     * <p>New value to set.</p>
     *

     * @return null|string
     */
    public function getPaymentStrategy();

    /**
     * @param ?string $paymentStrategy
     */
    public function setPaymentStrategy(?string $paymentStrategy): void;
}
