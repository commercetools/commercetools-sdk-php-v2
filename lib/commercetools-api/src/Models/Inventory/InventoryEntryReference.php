<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface InventoryEntryReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * @return null|InventoryEntry
     */
    public function getObj();

    /**
     * @param ?InventoryEntry $obj
     */
    public function setObj(?InventoryEntry $obj): void;
}
