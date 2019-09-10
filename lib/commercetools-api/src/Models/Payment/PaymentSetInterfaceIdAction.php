<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

interface PaymentSetInterfaceIdAction extends PaymentUpdateAction
{
    const FIELD_INTERFACE_ID = 'interfaceId';

    /**
     * @return null|string
     */
    public function getInterfaceId();

    public function setInterfaceId(?string $interfaceId): void;
}
