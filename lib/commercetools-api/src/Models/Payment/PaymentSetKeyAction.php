<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

interface PaymentSetKeyAction extends PaymentUpdateAction
{
    const FIELD_KEY = 'key';

    /**
     * <p>User-specific unique identifier for the payment (max.
     * 256 characters).
     * If not provided an existing key will be removed.</p>.
     *
     * @return null|string
     */
    public function getKey();

    public function setKey(?string $key): void;
}
