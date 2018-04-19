<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Base\Collection;

interface CartDiscountValueCollection extends Collection
{
    /**
     * @param $index
     * @return CartDiscountValue
     */
    public function at($index);

    /**
     * @return CartDiscountValue
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartDiscountValue
     */
    public function map($data, $index);
}
