<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\UpdateCollection;


interface CartDiscountUpdateCollection extends UpdateCollection {
    /**
     * @param $index
     * @return CartDiscountUpdate
     */
    public function at($index);

    /**
     * @return CartDiscountUpdate
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartDiscountUpdate
     */
    public function map($data, $index);
}
