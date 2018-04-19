<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Types\Inventory\InventoryEntryUpdateActionCollection;


interface InventorySetCustomFieldActionCollection extends InventoryEntryUpdateActionCollection
{
    /**
     * @param $index
     * @return InventorySetCustomFieldAction
     */
    public function at($index);

    /**
     * @return InventorySetCustomFieldAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return InventorySetCustomFieldAction
     */
    public function map($data, $index);
}
