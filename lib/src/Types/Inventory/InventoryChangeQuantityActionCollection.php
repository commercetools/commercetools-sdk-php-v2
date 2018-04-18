<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Types\Inventory\InventoryEntryUpdateActionCollection;


interface InventoryChangeQuantityActionCollection extends InventoryEntryUpdateActionCollection {
    /**
     * @param $index
     * @return InventoryChangeQuantityAction
     */
    public function at($index);

    /**
     * @return InventoryChangeQuantityAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return InventoryChangeQuantityAction
     */
    public function map($data, $index);
}
