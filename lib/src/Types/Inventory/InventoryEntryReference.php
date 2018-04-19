<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Types\Common\Reference;

interface InventoryEntryReference extends Reference
{
    const FIELD_OBJ = 'obj';

    /**
     * @return InventoryEntry
     */
    public function getObj();

    /**
     * @param InventoryEntry $obj
     * @return $this
     */
    public function setObj(InventoryEntry $obj);

}
