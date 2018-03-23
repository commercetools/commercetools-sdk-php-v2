<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Base\Collection;

interface InventoryEntryCollection extends Collection {
    /**
     * @param $index
     * @return InventoryEntry
     */
    public function at($index);

    /**
     * @return InventoryEntry
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return InventoryEntry
     */
    public function map($data, $index);

    /**
     * @param $id
     * @return string
     */
    public function byId($id);
}
