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

interface StagedOrderSetPurchaseOrderNumberAction extends StagedOrderUpdateAction
{
    public const FIELD_PURCHASE_ORDER_NUMBER = 'purchaseOrderNumber';

    /**
     * <p>Value to set.</p>
     *

     * @return null|string
     */
    public function getPurchaseOrderNumber();

    /**
     * @param ?string $purchaseOrderNumber
     */
    public function setPurchaseOrderNumber(?string $purchaseOrderNumber): void;
}
