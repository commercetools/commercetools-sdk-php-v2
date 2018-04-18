<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Base\Collection;

interface ProductDiscountValueCollection extends Collection {
    /**
     * @param $index
     * @return ProductDiscountValue
     */
    public function at($index);

    /**
     * @return ProductDiscountValue
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductDiscountValue
     */
    public function map($data, $index);
}
