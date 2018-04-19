<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\Collection;

interface TaxedItemPriceCollection extends Collection
{
    /**
     * @param $index
     * @return TaxedItemPrice
     */
    public function at($index);

    /**
     * @return TaxedItemPrice
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return TaxedItemPrice
     */
    public function map($data, $index);
}
