<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Types\PagedQueryResponseModel;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

class StatePagedQueryResponseModel extends PagedQueryResponseModel implements StatePagedQueryResponse {
    /**
     * @var StateCollection
     */
    protected $results;

    /**
     * @return StateCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            $value = $this->raw(StatePagedQueryResponse::FIELD_RESULTS);
            if (is_null($value)) {
                return $this->mapData(StateCollection::class, null);
            }
            $value = $this->mapData(StateCollection::class, $value);
            $this->results = $value;
        }
        return $this->results;
    }

    /**
     * @param StateCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results)
    {
        if (!$results instanceof StateCollection) {
            throw new \InvalidArgumentException();
        }
        $this->results = $results;

        return $this;
    }

}
