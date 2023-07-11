<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StagedOrderChangeOrderStateAction extends StagedOrderUpdateAction
{
    public const FIELD_ORDER_STATE = 'orderState';

    /**
     * <p>New status of the Order.</p>
     *

     * @return null|string
     */
    public function getOrderState();

    /**
     * @param ?string $orderState
     */
    public function setOrderState(?string $orderState): void;
}
