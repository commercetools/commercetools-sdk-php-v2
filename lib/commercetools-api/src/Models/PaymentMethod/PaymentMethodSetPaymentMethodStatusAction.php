<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\PaymentMethod;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentMethodSetPaymentMethodStatusAction extends PaymentMethodUpdateAction
{
    public const FIELD_PAYMENT_METHOD_STATUS = 'paymentMethodStatus';

    /**
     * <p>Value to set.</p>
     *

     * @return null|string
     */
    public function getPaymentMethodStatus();

    /**
     * @param ?string $paymentMethodStatus
     */
    public function setPaymentMethodStatus(?string $paymentMethodStatus): void;
}
