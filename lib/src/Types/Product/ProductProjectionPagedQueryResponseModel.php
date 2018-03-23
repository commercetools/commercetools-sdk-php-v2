<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\PagedQueryResponseModel;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

class ProductProjectionPagedQueryResponseModel extends PagedQueryResponseModel implements ProductProjectionPagedQueryResponse {
    /**
     * @var ProductProjectionCollection
     */
    protected $results;

    /**
     * @return ProductProjectionCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            $value = $this->raw(ProductProjectionPagedQueryResponse::FIELD_RESULTS);
            if (is_null($value)) {
                return $this->mapData(ProductProjectionCollection::class, null);
            }
            $value = $this->mapData(ProductProjectionCollection::class, $value);
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
