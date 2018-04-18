<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\PagedQueryResponseCollection;


interface ProductProjectionPagedQueryResponseCollection extends PagedQueryResponseCollection {
    /**
     * @param $index
     * @return ProductProjectionPagedQueryResponse
     */
    public function at($index);

    /**
     * @return ProductProjectionPagedQueryResponse
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductProjectionPagedQueryResponse
     */
    public function map($data, $index);
}
