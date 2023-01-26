<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderPurchaseOrderNumberSetMessagePayload extends OrderMessagePayload
{
    public const FIELD_PURCHASE_ORDER_NUMBER = 'purchaseOrderNumber';
    public const FIELD_OLD_PURCHASE_ORDER_NUMBER = 'oldPurchaseOrderNumber';

    /**
     * <p>Purchase order number on the <a href="ctp:api:type:Order">Order</a> after the <a href="/../api/projects/orders#set-purchase-order-number">Set PurchaseOrderNumber</a> update action.</p>
     *

     * @return null|string
     */
    public function getPurchaseOrderNumber();

    /**
     * <p>Purchase order number on the <a href="ctp:api:type:Order">Order</a> before the <a href="/../api/projects/orders#set-purchase-order-number">Set PurchaseOrderNumber</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldPurchaseOrderNumber();

    /**
     * @param ?string $purchaseOrderNumber
     */
    public function setPurchaseOrderNumber(?string $purchaseOrderNumber): void;

    /**
     * @param ?string $oldPurchaseOrderNumber
     */
    public function setOldPurchaseOrderNumber(?string $oldPurchaseOrderNumber): void;
}
