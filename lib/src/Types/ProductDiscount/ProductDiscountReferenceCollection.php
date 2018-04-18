<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Types\Common\ReferenceCollection;


interface ProductDiscountReferenceCollection extends ReferenceCollection {
    /**
     * @param $index
     * @return ProductDiscountReference
     */
    public function at($index);

    /**
     * @return ProductDiscountReference
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductDiscountReference
     */
    public function map($data, $index);
}
