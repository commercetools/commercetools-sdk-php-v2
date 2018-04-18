<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Types\UpdateActionCollection;


interface InventoryEntryUpdateActionCollection extends UpdateActionCollection {
    /**
     * @param $index
     * @return InventoryEntryUpdateAction
     */
    public function at($index);

    /**
     * @return InventoryEntryUpdateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return InventoryEntryUpdateAction
     */
    public function map($data, $index);
}
