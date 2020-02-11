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
     * @return null|string
     */
    public function getInterfaceId();

    public function setInterfaceId(?string $interfaceId): void;
}
