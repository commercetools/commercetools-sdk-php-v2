<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\JsonObject;

interface PaymentMethodInfo extends JsonObject
{
    const FIELD_PAYMENT_INTERFACE = 'paymentInterface';
    const FIELD_METHOD = 'method';
    const FIELD_NAME = 'name';

    /**
     * @return null|string
     */
    public function getPaymentInterface();

    /**
     * @return null|string
     */
    public function getMethod();

    /**
     * @return null|LocalizedString
     */
    public function getName();

    public function setPaymentInterface(?string $paymentInterface): void;

    public function setMethod(?string $method): void;

    public function setName(?LocalizedString $name): void;
}
