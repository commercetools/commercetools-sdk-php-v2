<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\Collection;

interface DiscountedLineItemPriceForQuantityCollection extends Collection {
    /**
     * @param $index
     * @return DiscountedLineItemPriceForQuantity
     */
    public function at($index);

    /**
     * @return DiscountedLineItemPriceForQuantity
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return DiscountedLineItemPriceForQuantity
     */
    public function map($data, $index);
}
