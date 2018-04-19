<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Types\Inventory\InventoryEntryUpdateActionCollection;


interface InventoryAddQuantityActionCollection extends InventoryEntryUpdateActionCollection
{
    /**
     * @param $index
     * @return InventoryAddQuantityAction
     */
    public function at($index);

    /**
     * @return InventoryAddQuantityAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return InventoryAddQuantityAction
     */
    public function map($data, $index);
}
