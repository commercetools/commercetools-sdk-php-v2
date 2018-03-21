<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

interface TypePagedQueryResponse extends PagedQueryResponse {
    /**
     * @return TypeCollection
     */
    public function getResults();

    /**
     * @param TypeCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results);

}
