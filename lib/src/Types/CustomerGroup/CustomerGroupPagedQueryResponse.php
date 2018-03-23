<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomerGroup;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

interface CustomerGroupPagedQueryResponse extends PagedQueryResponse {
    /**
     * @return CustomerGroupCollection
     */
    public function getResults();

    /**
     * @param CustomerGroupCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results);

}
