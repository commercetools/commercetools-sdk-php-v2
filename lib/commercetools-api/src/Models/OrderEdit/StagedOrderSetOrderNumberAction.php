<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;

interface StagedOrderSetOrderNumberAction extends StagedOrderUpdateAction
{
    const FIELD_ORDER_NUMBER = 'orderNumber';

    /**
     * @return null|string
     */
    public function getOrderNumber();

    public function setOrderNumber(?string $orderNumber): void;
}
