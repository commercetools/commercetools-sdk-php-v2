<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Base\Collection;

interface CartDiscountCollection extends Collection {
    /**
     * @param $index
     * @return CartDiscount
     */
    public function at($index);

    /**
     * @return CartDiscount
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartDiscount
     */
    public function map($data, $index);

    /**
     * @param string $id
     * @return CartDiscount
     */
    public function byId($id);
}
