<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

interface InventoryPagedQueryResponse extends PagedQueryResponse {
    /**
     * @return InventoryEntryCollection
     */
    public function getResults();

    /**
     * @param InventoryEntryCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results);

}
