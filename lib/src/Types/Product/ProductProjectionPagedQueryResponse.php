<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

interface ProductProjectionPagedQueryResponse extends PagedQueryResponse {
    /**
     * @return ProductProjectionCollection
     */
    public function getResults();

    /**
     * @param ProductProjectionCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results);

}
