<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentSetStatusInterfaceCodeAction extends PaymentUpdateAction
{
    public const FIELD_INTERFACE_CODE = 'interfaceCode';

    /**
     * @return null|string
     */
    public function getInterfaceCode();

    public function setInterfaceCode(?string $interfaceCode): void;
}
