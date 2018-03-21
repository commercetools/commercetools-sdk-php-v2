<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Base\Collection;

interface ProductDiscountCollection extends Collection {
    /**
     * @param $index
     * @return ProductDiscount
     */
    public function at($index);

    /**
     * @return ProductDiscount
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductDiscount
     */
    public function map($data, $index);

    /**
     * @param $id
     * @return string
     */
    public function byId($id);
}
