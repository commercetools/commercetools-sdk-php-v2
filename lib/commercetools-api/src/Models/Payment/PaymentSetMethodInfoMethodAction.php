<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

interface PaymentSetMethodInfoMethodAction extends PaymentUpdateAction
{
    const FIELD_METHOD = 'method';

    /**
     * <p>If not provided, the method is unset.</p>.
     *
     * @return null|string
     */
    public function getMethod();

    public function setMethod(?string $method): void;
}
