<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Types\Inventory\InventoryEntryUpdateActionCollection;


interface InventoryRemoveQuantityActionCollection extends InventoryEntryUpdateActionCollection {
    /**
     * @param $index
     * @return InventoryRemoveQuantityAction
     */
    public function at($index);

    /**
     * @return InventoryRemoveQuantityAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return InventoryRemoveQuantityAction
     */
    public function map($data, $index);
}
