<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Types\Inventory\InventoryEntryUpdateActionCollection;


interface InventorySetExpectedDeliveryActionCollection extends InventoryEntryUpdateActionCollection {
    /**
     * @param $index
     * @return InventorySetExpectedDeliveryAction
     */
    public function at($index);

    /**
     * @return InventorySetExpectedDeliveryAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return InventorySetExpectedDeliveryAction
     */
    public function map($data, $index);
}
