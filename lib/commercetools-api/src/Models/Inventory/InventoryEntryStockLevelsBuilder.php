<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<InventoryEntryStockLevels>
 */
final class InventoryEntryStockLevelsBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $reorderPoint;

    /**

     * @var ?int
     */
    private $safetyStock;

    /**
     * <p>When the <code>quantityOnStock</code> of the <a href="ctp:api:type:InventoryEntry">InventoryEntry</a> reaches this value, an <a href="ctp:api:type:InventoryEntryReorderPointMessage">InventoryEntryReorderPoint</a> Message is generated.</p>
     *

     * @return null|int
     */
    public function getReorderPoint()
    {
        return $this->reorderPoint;
    }

    /**
     * <p>When the <code>quantityOnStock</code> of the <a href="ctp:api:type:InventoryEntry">InventoryEntry</a> reaches this value, an <a href="ctp:api:type:InventoryEntrySafetyStockMessage">InventoryEntrySafetyStock</a> Message is generated.</p>
     *

     * @return null|int
     */
    public function getSafetyStock()
    {
        return $this->safetyStock;
    }

    /**
     * @param ?int $reorderPoint
     * @return $this
     */
    public function withReorderPoint(?int $reorderPoint)
    {
        $this->reorderPoint = $reorderPoint;

        return $this;
    }

    /**
     * @param ?int $safetyStock
     * @return $this
     */
    public function withSafetyStock(?int $safetyStock)
    {
        $this->safetyStock = $safetyStock;

        return $this;
    }


    public function build(): InventoryEntryStockLevels
    {
        return new InventoryEntryStockLevelsModel(
            $this->reorderPoint,
            $this->safetyStock
        );
    }

    public static function of(): InventoryEntryStockLevelsBuilder
    {
        return new self();
    }
}
