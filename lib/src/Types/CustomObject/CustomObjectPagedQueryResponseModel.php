<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomObject;

use Commercetools\Types\PagedQueryResponseModel;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

class CustomObjectPagedQueryResponseModel extends PagedQueryResponseModel implements CustomObjectPagedQueryResponse {
    /**
     * @var CustomObjectCollection
     */
    protected $results;

    /**
     * @return CustomObjectCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            $value = $this->raw(CustomObjectPagedQueryResponse::FIELD_RESULTS);
            if (is_null($value)) {
                return $this->mapData(CustomObjectCollection::class, null);
            }
            $value = $this->mapData(CustomObjectCollection::class, $value);
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
