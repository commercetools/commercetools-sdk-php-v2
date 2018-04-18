<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Types\PagedQueryResponseCollection;


interface ProductDiscountPagedQueryResponseCollection extends PagedQueryResponseCollection {
    /**
     * @param $index
     * @return ProductDiscountPagedQueryResponse
     */
    public function at($index);

    /**
     * @return ProductDiscountPagedQueryResponse
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductDiscountPagedQueryResponse
     */
    public function map($data, $index);
}
