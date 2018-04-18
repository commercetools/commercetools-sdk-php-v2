<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Types\Inventory\InventoryEntryUpdateActionCollection;


interface InventorySetSupplyChannelActionCollection extends InventoryEntryUpdateActionCollection {
    /**
     * @param $index
     * @return InventorySetSupplyChannelAction
     */
    public function at($index);

    /**
     * @return InventorySetSupplyChannelAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return InventorySetSupplyChannelAction
     */
    public function map($data, $index);
}
