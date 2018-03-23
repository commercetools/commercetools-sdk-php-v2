<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Base\Collection;

interface CartDiscountReferenceCollection extends Collection {
    /**
     * @param $index
     * @return CartDiscountReference
     */
    public function at($index);

    /**
     * @return CartDiscountReference
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartDiscountReference
     */
    public function map($data, $index);
}
