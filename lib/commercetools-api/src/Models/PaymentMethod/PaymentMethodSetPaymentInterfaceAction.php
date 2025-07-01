<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\PaymentMethod;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentMethodSetPaymentInterfaceAction extends PaymentMethodUpdateAction
{
    public const FIELD_PAYMENT_INTERFACE = 'paymentInterface';

    /**
     * <p>New payment service that processes the Payment—for example, a PSP.
     * If empty, any existing value will be removed.</p>
     *

     * @return null|string
     */
    public function getPaymentInterface();

    /**
     * @param ?string $paymentInterface
     */
    public function setPaymentInterface(?string $paymentInterface): void;
}
