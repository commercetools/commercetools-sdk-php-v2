<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Types\UpdateCollection;


interface InventoryEntryUpdateCollection extends UpdateCollection {
    /**
     * @param $index
     * @return InventoryEntryUpdate
     */
    public function at($index);

    /**
     * @return InventoryEntryUpdate
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return InventoryEntryUpdate
     */
    public function map($data, $index);
}
