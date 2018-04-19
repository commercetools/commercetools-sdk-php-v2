<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountTargetCollection;


interface MultiBuyLineItemsTargetCollection extends CartDiscountTargetCollection
{
    /**
     * @param $index
     * @return MultiBuyLineItemsTarget
     */
    public function at($index);

    /**
     * @return MultiBuyLineItemsTarget
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return MultiBuyLineItemsTarget
     */
    public function map($data, $index);
}
