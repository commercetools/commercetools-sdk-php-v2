<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountUpdateActionCollection;


interface CartDiscountSetDescriptionActionCollection extends CartDiscountUpdateActionCollection
{
    /**
     * @param $index
     * @return CartDiscountSetDescriptionAction
     */
    public function at($index);

    /**
     * @return CartDiscountSetDescriptionAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartDiscountSetDescriptionAction
     */
    public function map($data, $index);
}
