<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

interface ProductPagedQueryResponse extends PagedQueryResponse {
    /**
     * @return ProductCollection
     */
    public function getResults();

    /**
     * @param ProductCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results);

}
