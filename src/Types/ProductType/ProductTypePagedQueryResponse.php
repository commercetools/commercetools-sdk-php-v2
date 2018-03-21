<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

interface ProductTypePagedQueryResponse extends PagedQueryResponse {
    /**
     * @return ProductTypeCollection
     */
    public function getResults();

    /**
     * @param ProductTypeCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results);

}
