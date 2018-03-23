<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Types\PagedQueryResponseModel;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

class InventoryPagedQueryResponseModel extends PagedQueryResponseModel implements InventoryPagedQueryResponse {
    /**
     * @var InventoryEntryCollection
     */
    protected $results;

    /**
     * @return InventoryEntryCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            $value = $this->raw(InventoryPagedQueryResponse::FIELD_RESULTS);
            if (is_null($value)) {
                return $this->mapData(InventoryEntryCollection::class, null);
            }
            $value = $this->mapData(InventoryEntryCollection::class, $value);
            $this->results = $value;
        }
        return $this->results;
    }

    /**
     * @param ResourceCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results)
    {
        $this->results = $results;

        return $this;
    }

}
