<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Types\ProductDiscount\ProductDiscountUpdateActionCollection;


interface ProductDiscountChangeSortOrderActionCollection extends ProductDiscountUpdateActionCollection {
    /**
     * @param $index
     * @return ProductDiscountChangeSortOrderAction
     */
    public function at($index);

    /**
     * @return ProductDiscountChangeSortOrderAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductDiscountChangeSortOrderAction
     */
    public function map($data, $index);
}
