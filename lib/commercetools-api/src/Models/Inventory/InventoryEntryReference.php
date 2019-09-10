<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Api\Models\Common\Reference;

interface InventoryEntryReference extends Reference
{
    const FIELD_OBJ = 'obj';

    /**
     * @return null|InventoryEntry
     */
    public function getObj();

    public function setObj(?InventoryEntry $obj): void;
}
