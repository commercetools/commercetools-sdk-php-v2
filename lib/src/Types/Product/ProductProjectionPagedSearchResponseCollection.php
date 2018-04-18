<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\PagedQueryResponseCollection;


interface ProductProjectionPagedSearchResponseCollection extends PagedQueryResponseCollection {
    /**
     * @param $index
     * @return ProductProjectionPagedSearchResponse
     */
    public function at($index);

    /**
     * @return ProductProjectionPagedSearchResponse
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductProjectionPagedSearchResponse
     */
    public function map($data, $index);
}
