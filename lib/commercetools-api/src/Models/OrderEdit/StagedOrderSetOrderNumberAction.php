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

interface StagedOrderSetOrderNumberAction extends StagedOrderUpdateAction
{
    public const FIELD_ORDER_NUMBER = 'orderNumber';

    /**
     * <p>Value to set. Must be unique across a Project.
     * Once set, the value cannot be changed.</p>
     *

     * @return null|string
     */
    public function getOrderNumber();

    /**
     * @param ?string $orderNumber
     */
    public function setOrderNumber(?string $orderNumber): void;
}
