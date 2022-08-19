<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Inventory\InventoryEntry;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface InventoryEntryCreatedMessagePayload extends MessagePayload
{
    public const FIELD_INVENTORY_ENTRY = 'inventoryEntry';

    /**
     * <p><a href="ctp:api:type:InventoryEntry">InventoryEntry</a> that was created.</p>
     *

     * @return null|InventoryEntry
     */
    public function getInventoryEntry();

    /**
     * @param ?InventoryEntry $inventoryEntry
     */
    public function setInventoryEntry(?InventoryEntry $inventoryEntry): void;
}
