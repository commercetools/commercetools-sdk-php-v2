<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

interface ReviewPagedQueryResponse extends PagedQueryResponse {
    /**
     * @return ReviewCollection
     */
    public function getResults();

    /**
     * @param ReviewCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results);

}
