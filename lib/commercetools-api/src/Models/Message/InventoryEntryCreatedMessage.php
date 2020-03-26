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

interface InventoryEntryCreatedMessage extends Message
{
    public const FIELD_INVENTORY_ENTRY = 'inventoryEntry';

    /**
     * @return null|InventoryEntry
     */
    public function getInventoryEntry();

    public function setInventoryEntry(?InventoryEntry $inventoryEntry): void;
}
