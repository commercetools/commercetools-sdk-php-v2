<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\PagedQueryResponseCollection;


interface CartDiscountPagedQueryResponseCollection extends PagedQueryResponseCollection {
    /**
     * @param $index
     * @return CartDiscountPagedQueryResponse
     */
    public function at($index);

    /**
     * @return CartDiscountPagedQueryResponse
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartDiscountPagedQueryResponse
     */
    public function map($data, $index);
}
