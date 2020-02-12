<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderChangeOrderStateAction extends OrderUpdateAction
{
    public const FIELD_ORDER_STATE = 'orderState';

    /**
     * @return null|string
     */
    public function getOrderState();

    public function setOrderState(?string $orderState): void;
}
