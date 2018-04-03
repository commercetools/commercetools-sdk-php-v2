<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\PagedQueryResponseModel;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

class CartDiscountPagedQueryResponseModel extends PagedQueryResponseModel implements CartDiscountPagedQueryResponse {
    /**
     * @var CartDiscountCollection
     */
    protected $results;

    /**
     * @return CartDiscountCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            $value = $this->raw(CartDiscountPagedQueryResponse::FIELD_RESULTS);
            if (is_null($value)) {
                return $this->mapData(CartDiscountCollection::class, null);
            }
            $value = $this->mapData(CartDiscountCollection::class, $value);
            $this->results = $value;
        }
        return $this->results;
    }

    /**
     * @param CartDiscountCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results)
    {
        if (!$results instanceof CartDiscountCollection) {
            throw new InvalidArgumentException();
        }
        $this->results = $results;

        return $this;
    }

}
