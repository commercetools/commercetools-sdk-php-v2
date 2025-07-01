<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentSetInterfaceIdAction extends PaymentUpdateAction
{
    public const FIELD_INTERFACE_ID = 'interfaceId';

    /**
     * <p>Value to set.
     * The combination of <code>interfaceId</code> and <code>paymentInterface</code> of a PaymentMethodInfo must be unique.</p>
     * <p>The value cannot be modified after it is set.</p>
     *

     * @return null|string
     */
    public function getInterfaceId();

    /**
     * @param ?string $interfaceId
     */
    public function setInterfaceId(?string $interfaceId): void;
}
