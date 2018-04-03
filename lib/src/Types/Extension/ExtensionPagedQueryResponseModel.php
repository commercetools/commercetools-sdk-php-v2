<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\PagedQueryResponseModel;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

class ExtensionPagedQueryResponseModel extends PagedQueryResponseModel implements ExtensionPagedQueryResponse {
    /**
     * @var ExtensionCollection
     */
    protected $results;

    /**
     * @return ExtensionCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            $value = $this->raw(ExtensionPagedQueryResponse::FIELD_RESULTS);
            if (is_null($value)) {
                return $this->mapData(ExtensionCollection::class, null);
            }
            $value = $this->mapData(ExtensionCollection::class, $value);
            $this->results = $value;
        }
        return $this->results;
    }

    /**
     * @param ExtensionCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results)
    {
        if (!$results instanceof ExtensionCollection) {
            throw new InvalidArgumentException();
        }
        $this->results = $results;

        return $this;
    }

}
