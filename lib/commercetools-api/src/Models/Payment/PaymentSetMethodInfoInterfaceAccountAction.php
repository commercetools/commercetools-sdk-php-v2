<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentSetMethodInfoInterfaceAccountAction extends PaymentUpdateAction
{
    public const FIELD_INTERFACE_ACCOUNT = 'interfaceAccount';

    /**
     * <p>New account or instance of the payment interface.
     * If omitted, any existing value is removed.</p>
     *

     * @return null|string
     */
    public function getInterfaceAccount();

    /**
     * @param ?string $interfaceAccount
     */
    public function setInterfaceAccount(?string $interfaceAccount): void;
}
