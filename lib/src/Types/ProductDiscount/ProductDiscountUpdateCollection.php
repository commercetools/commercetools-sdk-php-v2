<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Types\UpdateCollection;


interface ProductDiscountUpdateCollection extends UpdateCollection {
    /**
     * @param $index
     * @return ProductDiscountUpdate
     */
    public function at($index);

    /**
     * @return ProductDiscountUpdate
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductDiscountUpdate
     */
    public function map($data, $index);
}
