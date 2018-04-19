<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Types\Inventory\InventoryEntryUpdateActionCollection;


interface InventorySetRestockableInDaysActionCollection extends InventoryEntryUpdateActionCollection
{
    /**
     * @param $index
     * @return InventorySetRestockableInDaysAction
     */
    public function at($index);

    /**
     * @return InventorySetRestockableInDaysAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return InventorySetRestockableInDaysAction
     */
    public function map($data, $index);
}
