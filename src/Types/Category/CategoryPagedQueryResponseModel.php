<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\PagedQueryResponseModel;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

class CategoryPagedQueryResponseModel extends PagedQueryResponseModel implements CategoryPagedQueryResponse {
    /**
     * @var CategoryCollection
     */
    protected $results;

    /**
     * @return CategoryCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            $value = $this->raw(CategoryPagedQueryResponse::FIELD_RESULTS);
            if (is_null($value)) {
                return $this->mapData(CategoryCollection::class, null);
            }
            $value = $this->mapData(CategoryCollection::class, $value);
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
