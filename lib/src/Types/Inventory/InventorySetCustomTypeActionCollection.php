<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Types\Inventory\InventoryEntryUpdateActionCollection;


interface InventorySetCustomTypeActionCollection extends InventoryEntryUpdateActionCollection {
    /**
     * @param $index
     * @return InventorySetCustomTypeAction
     */
    public function at($index);

    /**
     * @return InventorySetCustomTypeAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return InventorySetCustomTypeAction
     */
    public function map($data, $index);
}
