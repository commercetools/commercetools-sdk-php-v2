<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Types\Common\ResourceCollection;


interface InventoryEntryCollection extends ResourceCollection {
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
     * @param string $id
     * @return InventoryEntry
     */
    public function byId($id);
}
