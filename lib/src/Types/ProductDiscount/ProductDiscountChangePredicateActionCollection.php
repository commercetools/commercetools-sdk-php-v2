<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Types\ProductDiscount\ProductDiscountUpdateActionCollection;


interface ProductDiscountChangePredicateActionCollection extends ProductDiscountUpdateActionCollection {
    /**
     * @param $index
     * @return ProductDiscountChangePredicateAction
     */
    public function at($index);

    /**
     * @return ProductDiscountChangePredicateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductDiscountChangePredicateAction
     */
    public function map($data, $index);
}
