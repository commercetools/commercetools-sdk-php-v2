<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Types\ProductDiscount\ProductDiscountValueCollection;


interface ProductDiscountValueRelativeCollection extends ProductDiscountValueCollection {
    /**
     * @param $index
     * @return ProductDiscountValueRelative
     */
    public function at($index);

    /**
     * @return ProductDiscountValueRelative
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductDiscountValueRelative
     */
    public function map($data, $index);
}
