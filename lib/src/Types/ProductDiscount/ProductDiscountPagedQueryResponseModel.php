<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\PagedQueryResponseModel;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

class ProductDiscountPagedQueryResponseModel extends PagedQueryResponseModel implements ProductDiscountPagedQueryResponse
{
    /**
     * @var ProductDiscountCollection
     */
    protected $results;

    /**
     * @return ProductDiscountCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            $value = $this->raw(ProductDiscountPagedQueryResponse::FIELD_RESULTS);
            if (is_null($value)) {
                return $this->mapData(ProductDiscountCollection::class, null);
            }
            $value = $this->mapData(ProductDiscountCollection::class, $value);
            $this->results = $value;
        }
        return $this->results;
    }

    /**
     * @param ProductDiscountCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results)
    {
        if (!$results instanceof ProductDiscountCollection) {
            throw new InvalidArgumentException();
        }
        $this->results = $results;

        return $this;
    }

}
