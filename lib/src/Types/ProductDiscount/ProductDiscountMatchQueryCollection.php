<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Base\Collection;

interface ProductDiscountMatchQueryCollection extends Collection
{
    /**
     * @param $index
     * @return ProductDiscountMatchQuery
     */
    public function at($index);

    /**
     * @return ProductDiscountMatchQuery
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductDiscountMatchQuery
     */
    public function map($data, $index);
}
