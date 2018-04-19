<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\PagedQueryResponseModel;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

class ReviewPagedQueryResponseModel extends PagedQueryResponseModel implements ReviewPagedQueryResponse
{
    /**
     * @var ReviewCollection
     */
    protected $results;

    /**
     * @return ReviewCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            $value = $this->raw(ReviewPagedQueryResponse::FIELD_RESULTS);
            if (is_null($value)) {
                return $this->mapData(ReviewCollection::class, null);
            }
            $value = $this->mapData(ReviewCollection::class, $value);
            $this->results = $value;
        }
        return $this->results;
    }

    /**
     * @param ReviewCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results)
    {
        if (!$results instanceof ReviewCollection) {
            throw new InvalidArgumentException();
        }
        $this->results = $results;

        return $this;
    }

}
