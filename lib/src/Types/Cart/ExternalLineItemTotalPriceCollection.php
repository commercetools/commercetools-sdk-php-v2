<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\Collection;

interface ExternalLineItemTotalPriceCollection extends Collection {
    /**
     * @param $index
     * @return ExternalLineItemTotalPrice
     */
    public function at($index);

    /**
     * @return ExternalLineItemTotalPrice
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ExternalLineItemTotalPrice
     */
    public function map($data, $index);
}
