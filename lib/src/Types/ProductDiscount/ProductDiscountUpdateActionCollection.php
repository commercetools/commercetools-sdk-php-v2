<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Base\Collection;

interface ProductDiscountUpdateActionCollection extends Collection {
    /**
     * @param $index
     * @return ProductDiscountUpdateAction
     */
    public function at($index);

    /**
     * @return ProductDiscountUpdateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductDiscountUpdateAction
     */
    public function map($data, $index);
}
