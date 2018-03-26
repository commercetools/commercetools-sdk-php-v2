<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\PagedQueryResponseModel;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

class CustomerPagedQueryResponseModel extends PagedQueryResponseModel implements CustomerPagedQueryResponse {
    /**
     * @var CustomerCollection
     */
    protected $results;

    /**
     * @return CustomerCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            $value = $this->raw(CustomerPagedQueryResponse::FIELD_RESULTS);
            if (is_null($value)) {
                return $this->mapData(CustomerCollection::class, null);
            }
            $value = $this->mapData(CustomerCollection::class, $value);
            $this->results = $value;
        }
        return $this->results;
    }

    /**
     * @param CustomerCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results)
    {
        if (!$results instanceof CustomerCollection) {
            throw new \InvalidArgumentException();
        }
        $this->results = $results;

        return $this;
    }

}
