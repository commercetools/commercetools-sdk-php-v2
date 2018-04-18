<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\UpdateActionCollection;


interface CartDiscountUpdateActionCollection extends UpdateActionCollection {
    /**
     * @param $index
     * @return CartDiscountUpdateAction
     */
    public function at($index);

    /**
     * @return CartDiscountUpdateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartDiscountUpdateAction
     */
    public function map($data, $index);
}
