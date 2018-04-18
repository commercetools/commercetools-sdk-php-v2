<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface InventoryEntryDeletedMessageCollection extends MessageCollection {
    /**
     * @param $index
     * @return InventoryEntryDeletedMessage
     */
    public function at($index);

    /**
     * @return InventoryEntryDeletedMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return InventoryEntryDeletedMessage
     */
    public function map($data, $index);
}
