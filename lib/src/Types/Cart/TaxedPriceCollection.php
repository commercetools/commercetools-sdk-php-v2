<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\Collection;

interface TaxedPriceCollection extends Collection
{
    /**
     * @param $index
     * @return TaxedPrice
     */
    public function at($index);

    /**
     * @return TaxedPrice
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return TaxedPrice
     */
    public function map($data, $index);
}
