<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\PagedQueryResponseModel;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

class CartPagedQueryResponseModel extends PagedQueryResponseModel implements CartPagedQueryResponse
{
    /**
     * @var CartCollection
     */
    protected $results;

    /**
     * @return CartCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            $value = $this->raw(CartPagedQueryResponse::FIELD_RESULTS);
            if (is_null($value)) {
                return $this->mapData(CartCollection::class, null);
            }
            $value = $this->mapData(CartCollection::class, $value);
            $this->results = $value;
        }
        return $this->results;
    }

    /**
     * @param CartCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results)
    {
        if (!$results instanceof CartCollection) {
            throw new InvalidArgumentException();
        }
        $this->results = $results;

        return $this;
    }

}
