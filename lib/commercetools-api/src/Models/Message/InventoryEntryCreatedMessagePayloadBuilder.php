<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Inventory\InventoryEntry;
use Commercetools\Api\Models\Inventory\InventoryEntryBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<InventoryEntryCreatedMessagePayload>
 */
final class InventoryEntryCreatedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|InventoryEntry|InventoryEntryBuilder
     */
    private $inventoryEntry;

    /**
     * <p><a href="ctp:api:type:InventoryEntry">InventoryEntry</a> that was created.</p>
     *

     * @return null|InventoryEntry
     */
    public function getInventoryEntry()
    {
        return $this->inventoryEntry instanceof InventoryEntryBuilder ? $this->inventoryEntry->build() : $this->inventoryEntry;
    }

    /**
     * @param ?InventoryEntry $inventoryEntry
     * @return $this
     */
    public function withInventoryEntry(?InventoryEntry $inventoryEntry)
    {
        $this->inventoryEntry = $inventoryEntry;

        return $this;
    }

    /**
     * @deprecated use withInventoryEntry() instead
     * @return $this
     */
    public function withInventoryEntryBuilder(?InventoryEntryBuilder $inventoryEntry)
    {
        $this->inventoryEntry = $inventoryEntry;

        return $this;
    }

    public function build(): InventoryEntryCreatedMessagePayload
    {
        return new InventoryEntryCreatedMessagePayloadModel(
            $this->inventoryEntry instanceof InventoryEntryBuilder ? $this->inventoryEntry->build() : $this->inventoryEntry
        );
    }

    public static function of(): InventoryEntryCreatedMessagePayloadBuilder
    {
        return new self();
    }
}
