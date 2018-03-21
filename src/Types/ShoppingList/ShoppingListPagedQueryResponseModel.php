<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\PagedQueryResponseModel;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

class ShoppingListPagedQueryResponseModel extends PagedQueryResponseModel implements ShoppingListPagedQueryResponse {
    /**
     * @var ShoppingListCollection
     */
    protected $results;

    /**
     * @return ShoppingListCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            $value = $this->raw(ShoppingListPagedQueryResponse::FIELD_RESULTS);
            if (is_null($value)) {
                return $this->mapData(ShoppingListCollection::class, null);
            }
            $value = $this->mapData(ShoppingListCollection::class, $value);
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
