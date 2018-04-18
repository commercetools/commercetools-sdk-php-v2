<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountTargetCollection;


interface MultiBuyCustomLineItemsTargetCollection extends CartDiscountTargetCollection {
    /**
     * @param $index
     * @return MultiBuyCustomLineItemsTarget
     */
    public function at($index);

    /**
     * @return MultiBuyCustomLineItemsTarget
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return MultiBuyCustomLineItemsTarget
     */
    public function map($data, $index);
}
