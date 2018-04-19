<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\Collection;

interface ProductDataCollection extends Collection
{
    /**
     * @param $index
     * @return ProductData
     */
    public function at($index);

    /**
     * @return ProductData
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductData
     */
    public function map($data, $index);
}
