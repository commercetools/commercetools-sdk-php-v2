<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class InventoryEntryStockLevelsModel extends JsonObjectModel implements InventoryEntryStockLevels
{
    /**
     *
     * @var ?int
     */
    protected $reorderPoint;

    /**
     *
     * @var ?int
     */
    protected $safetyStock;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $reorderPoint = null,
        ?int $safetyStock = null
    ) {
        $this->reorderPoint = $reorderPoint;
        $this->safetyStock = $safetyStock;
    }

    /**
     * <p>When the <code>quantityOnStock</code> of the <a href="ctp:api:type:InventoryEntry">InventoryEntry</a> reaches this value, an <a href="ctp:api:type:InventoryEntryReorderPointMessage">InventoryEntryReorderPoint</a> Message is generated.</p>
     *
     *
     * @return null|int
     */
    public function getReorderPoint()
    {
        if (is_null($this->reorderPoint)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_REORDER_POINT);
            if (is_null($data)) {
                return null;
            }
            $this->reorderPoint = (int) $data;
        }

        return $this->reorderPoint;
    }

    /**
     * <p>When the <code>quantityOnStock</code> of the <a href="ctp:api:type:InventoryEntry">InventoryEntry</a> reaches this value, an <a href="ctp:api:type:InventoryEntrySafetyStockMessage">InventoryEntrySafetyStock</a> Message is generated.</p>
     *
     *
     * @return null|int
     */
    public function getSafetyStock()
    {
        if (is_null($this->safetyStock)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_SAFETY_STOCK);
            if (is_null($data)) {
                return null;
            }
            $this->safetyStock = (int) $data;
        }

        return $this->safetyStock;
    }


    /**
     * @param ?int $reorderPoint
     */
    public function setReorderPoint(?int $reorderPoint): void
    {
        $this->reorderPoint = $reorderPoint;
    }

    /**
     * @param ?int $safetyStock
     */
    public function setSafetyStock(?int $safetyStock): void
    {
        $this->safetyStock = $safetyStock;
    }
}
