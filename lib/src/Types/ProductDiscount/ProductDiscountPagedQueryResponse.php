<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

interface ProductDiscountPagedQueryResponse extends PagedQueryResponse {
    /**
     * @return ProductDiscountCollection
     */
    public function getResults();

    /**
     * @param ProductDiscountCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results);

}
