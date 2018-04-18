<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Types\ProductDiscount\ProductDiscountValueCollection;


interface ProductDiscountValueAbsoluteCollection extends ProductDiscountValueCollection {
    /**
     * @param $index
     * @return ProductDiscountValueAbsolute
     */
    public function at($index);

    /**
     * @return ProductDiscountValueAbsolute
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductDiscountValueAbsolute
     */
    public function map($data, $index);
}
