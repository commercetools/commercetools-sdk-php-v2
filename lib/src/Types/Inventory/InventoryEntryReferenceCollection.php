<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Types\Common\ReferenceCollection;


interface InventoryEntryReferenceCollection extends ReferenceCollection
{
    /**
     * @param $index
     * @return InventoryEntryReference
     */
    public function at($index);

    /**
     * @return InventoryEntryReference
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return InventoryEntryReference
     */
    public function map($data, $index);
}
