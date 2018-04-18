<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Types\ProductDiscount\ProductDiscountUpdateActionCollection;


interface ProductDiscountChangeValueActionCollection extends ProductDiscountUpdateActionCollection {
    /**
     * @param $index
     * @return ProductDiscountChangeValueAction
     */
    public function at($index);

    /**
     * @return ProductDiscountChangeValueAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductDiscountChangeValueAction
     */
    public function map($data, $index);
}
