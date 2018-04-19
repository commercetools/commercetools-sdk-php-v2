<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Types\ProductDiscount\ProductDiscountUpdateActionCollection;


interface ProductDiscountSetDescriptionActionCollection extends ProductDiscountUpdateActionCollection
{
    /**
     * @param $index
     * @return ProductDiscountSetDescriptionAction
     */
    public function at($index);

    /**
     * @return ProductDiscountSetDescriptionAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductDiscountSetDescriptionAction
     */
    public function map($data, $index);
}
