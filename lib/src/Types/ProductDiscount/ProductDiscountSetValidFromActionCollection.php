<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Types\ProductDiscount\ProductDiscountUpdateActionCollection;


interface ProductDiscountSetValidFromActionCollection extends ProductDiscountUpdateActionCollection {
    /**
     * @param $index
     * @return ProductDiscountSetValidFromAction
     */
    public function at($index);

    /**
     * @return ProductDiscountSetValidFromAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductDiscountSetValidFromAction
     */
    public function map($data, $index);
}
