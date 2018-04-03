<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomerGroup;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\PagedQueryResponseModel;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

class CustomerGroupPagedQueryResponseModel extends PagedQueryResponseModel implements CustomerGroupPagedQueryResponse {
    /**
     * @var CustomerGroupCollection
     */
    protected $results;

    /**
     * @return CustomerGroupCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            $value = $this->raw(CustomerGroupPagedQueryResponse::FIELD_RESULTS);
            if (is_null($value)) {
                return $this->mapData(CustomerGroupCollection::class, null);
            }
            $value = $this->mapData(CustomerGroupCollection::class, $value);
            $this->results = $value;
        }
        return $this->results;
    }

    /**
     * @param CustomerGroupCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results)
    {
        if (!$results instanceof CustomerGroupCollection) {
            throw new InvalidArgumentException();
        }
        $this->results = $results;

        return $this;
    }

}
