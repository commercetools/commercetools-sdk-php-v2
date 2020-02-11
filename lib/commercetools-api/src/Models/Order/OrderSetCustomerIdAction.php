<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderSetCustomerIdAction extends OrderUpdateAction
{
    public const FIELD_CUSTOMER_ID = 'customerId';

    /**
     * @return null|string
     */
    public function getCustomerId();

    public function setCustomerId(?string $customerId): void;
}
