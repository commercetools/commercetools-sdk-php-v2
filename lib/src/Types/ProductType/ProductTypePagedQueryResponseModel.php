<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\PagedQueryResponseModel;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

class ProductTypePagedQueryResponseModel extends PagedQueryResponseModel implements ProductTypePagedQueryResponse {
    /**
     * @var ProductTypeCollection
     */
    protected $results;

    /**
     * @return ProductTypeCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            $value = $this->raw(ProductTypePagedQueryResponse::FIELD_RESULTS);
            if (is_null($value)) {
                return $this->mapData(ProductTypeCollection::class, null);
            }
            $value = $this->mapData(ProductTypeCollection::class, $value);
            $this->results = $value;
        }
        return $this->results;
    }

    /**
     * @param ProductTypeCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results)
    {
        if (!$results instanceof ProductTypeCollection) {
            throw new \InvalidArgumentException();
        }
        $this->results = $results;

        return $this;
    }

}
