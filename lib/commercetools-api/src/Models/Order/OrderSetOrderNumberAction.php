<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface OrderSetOrderNumberAction extends OrderUpdateAction
{

    public const FIELD_ORDER_NUMBER = 'orderNumber';

    /**
     * @return null|string
     */
    public function getOrderNumber();

    public function setOrderNumber(?string $orderNumber): void;
}
