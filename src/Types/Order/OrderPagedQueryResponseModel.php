<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\PagedQueryResponseModel;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

class OrderPagedQueryResponseModel extends PagedQueryResponseModel implements OrderPagedQueryResponse {
    /**
     * @var OrderCollection
     */
    protected $results;

    /**
     * @return OrderCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            $value = $this->raw(OrderPagedQueryResponse::FIELD_RESULTS);
            if (is_null($value)) {
                return $this->mapData(OrderCollection::class, null);
            }
            $value = $this->mapData(OrderCollection::class, $value);
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
