<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Types\PagedQueryResponseCollection;


interface InventoryPagedQueryResponseCollection extends PagedQueryResponseCollection {
    /**
     * @param $index
     * @return InventoryPagedQueryResponse
     */
    public function at($index);

    /**
     * @return InventoryPagedQueryResponse
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return InventoryPagedQueryResponse
     */
    public function map($data, $index);
}
