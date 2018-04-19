<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\Collection;

interface DiscountedLineItemPriceCollection extends Collection
{
    /**
     * @param $index
     * @return DiscountedLineItemPrice
     */
    public function at($index);

    /**
     * @return DiscountedLineItemPrice
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return DiscountedLineItemPrice
     */
    public function map($data, $index);
}
