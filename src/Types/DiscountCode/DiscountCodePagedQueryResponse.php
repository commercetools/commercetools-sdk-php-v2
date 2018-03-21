<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

interface DiscountCodePagedQueryResponse extends PagedQueryResponse {
    /**
     * @return DiscountCodeCollection
     */
    public function getResults();

    /**
     * @param DiscountCodeCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results);

}
