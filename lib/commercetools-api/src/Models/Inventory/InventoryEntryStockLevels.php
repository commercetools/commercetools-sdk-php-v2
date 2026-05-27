<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface InventoryEntryStockLevels extends JsonObject
{
    public const FIELD_REORDER_POINT = 'reorderPoint';
    public const FIELD_SAFETY_STOCK = 'safetyStock';

    /**
     * <p>When the <code>quantityOnStock</code> of the <a href="ctp:api:type:InventoryEntry">InventoryEntry</a> reaches this value, an <a href="ctp:api:type:InventoryEntryReorderPointMessage">InventoryEntryReorderPoint</a> Message is generated.</p>
     *

     * @return null|int
     */
    public function getReorderPoint();

    /**
     * <p>When the <code>quantityOnStock</code> of the <a href="ctp:api:type:InventoryEntry">InventoryEntry</a> reaches this value, an <a href="ctp:api:type:InventoryEntrySafetyStockMessage">InventoryEntrySafetyStock</a> Message is generated.</p>
     *

     * @return null|int
     */
    public function getSafetyStock();

    /**
     * @param ?int $reorderPoint
     */
    public function setReorderPoint(?int $reorderPoint): void;

    /**
     * @param ?int $safetyStock
     */
    public function setSafetyStock(?int $safetyStock): void;
}
