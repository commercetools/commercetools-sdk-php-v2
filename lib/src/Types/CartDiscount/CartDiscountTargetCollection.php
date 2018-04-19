<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Base\Collection;

interface CartDiscountTargetCollection extends Collection
{
    /**
     * @param $index
     * @return CartDiscountTarget
     */
    public function at($index);

    /**
     * @return CartDiscountTarget
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartDiscountTarget
     */
    public function map($data, $index);
}
