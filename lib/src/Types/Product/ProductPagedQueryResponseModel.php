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

class ProductPagedQueryResponseModel extends PagedQueryResponseModel implements ProductPagedQueryResponse {
    /**
     * @var ProductCollection
     */
    protected $results;

    /**
     * @return ProductCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            $value = $this->raw(ProductPagedQueryResponse::FIELD_RESULTS);
            if (is_null($value)) {
                return $this->mapData(ProductCollection::class, null);
            }
            $value = $this->mapData(ProductCollection::class, $value);
            $this->results = $value;
        }
        return $this->results;
    }

    /**
     * @param ProductCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results)
    {
        if (!$results instanceof ProductCollection) {
            throw new \InvalidArgumentException();
        }
        $this->results = $results;

        return $this;
    }

}
