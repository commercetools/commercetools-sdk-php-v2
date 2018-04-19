<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\PagedQueryResponseModel;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

class DiscountCodePagedQueryResponseModel extends PagedQueryResponseModel implements DiscountCodePagedQueryResponse
{
    /**
     * @var DiscountCodeCollection
     */
    protected $results;

    /**
     * @return DiscountCodeCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            $value = $this->raw(DiscountCodePagedQueryResponse::FIELD_RESULTS);
            if (is_null($value)) {
                return $this->mapData(DiscountCodeCollection::class, null);
            }
            $value = $this->mapData(DiscountCodeCollection::class, $value);
            $this->results = $value;
        }
        return $this->results;
    }

    /**
     * @param DiscountCodeCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results)
    {
        if (!$results instanceof DiscountCodeCollection) {
            throw new InvalidArgumentException();
        }
        $this->results = $results;

        return $this;
    }

}
