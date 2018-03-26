<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Base\Collection;

interface CartDiscountUpdateActionCollection extends Collection {
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
