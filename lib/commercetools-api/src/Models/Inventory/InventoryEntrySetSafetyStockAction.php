<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface InventoryEntrySetSafetyStockAction extends InventoryEntryUpdateAction
{
    public const FIELD_QUANTITY = 'quantity';

    /**
     * <p>Sets the configured inventory stock level for safety stock. If the value is absent or <code>null</code>
     * the configured inventory stock level is removed.</p>
     *

     * @return null|int
     */
    public function getQuantity();

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;
}
