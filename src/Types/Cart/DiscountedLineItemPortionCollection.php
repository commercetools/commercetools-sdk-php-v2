<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\Collection;

interface DiscountedLineItemPortionCollection extends Collection {
    /**
     * @param $index
     * @return DiscountedLineItemPortion
     */
    public function at($index);

    /**
     * @return DiscountedLineItemPortion
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return DiscountedLineItemPortion
     */
    public function map($data, $index);
}
