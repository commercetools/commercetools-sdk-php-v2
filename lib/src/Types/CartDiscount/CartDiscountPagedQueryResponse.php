<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

interface CartDiscountPagedQueryResponse extends PagedQueryResponse {
    /**
     * @return CartDiscountCollection
     */
    public function getResults();

    /**
     * @param CartDiscountCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results);

}
