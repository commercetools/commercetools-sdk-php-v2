<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Base\Collection;

interface InventoryEntryDraftCollection extends Collection {
    /**
     * @param $index
     * @return InventoryEntryDraft
     */
    public function at($index);

    /**
     * @return InventoryEntryDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return InventoryEntryDraft
     */
    public function map($data, $index);
}
