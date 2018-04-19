<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\PagedQueryResponseCollection;


interface ProductPagedQueryResponseCollection extends PagedQueryResponseCollection
{
    /**
     * @param $index
     * @return ProductPagedQueryResponse
     */
    public function at($index);

    /**
     * @return ProductPagedQueryResponse
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductPagedQueryResponse
     */
    public function map($data, $index);
}
