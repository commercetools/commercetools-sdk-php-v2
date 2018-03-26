<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\PagedQueryResponseModel;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

class TypePagedQueryResponseModel extends PagedQueryResponseModel implements TypePagedQueryResponse {
    /**
     * @var TypeCollection
     */
    protected $results;

    /**
     * @return TypeCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            $value = $this->raw(TypePagedQueryResponse::FIELD_RESULTS);
            if (is_null($value)) {
                return $this->mapData(TypeCollection::class, null);
            }
            $value = $this->mapData(TypeCollection::class, $value);
            $this->results = $value;
        }
        return $this->results;
    }

    /**
     * @param TypeCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results)
    {
        if (!$results instanceof TypeCollection) {
            throw new \InvalidArgumentException();
        }
        $this->results = $results;

        return $this;
    }

}
