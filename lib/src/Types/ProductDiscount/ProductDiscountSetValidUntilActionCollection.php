<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Types\ProductDiscount\ProductDiscountUpdateActionCollection;


interface ProductDiscountSetValidUntilActionCollection extends ProductDiscountUpdateActionCollection
{
    /**
     * @param $index
     * @return ProductDiscountSetValidUntilAction
     */
    public function at($index);

    /**
     * @return ProductDiscountSetValidUntilAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductDiscountSetValidUntilAction
     */
    public function map($data, $index);
}
