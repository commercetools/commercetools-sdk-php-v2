<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\Collection;

interface ProductVariantCollection extends Collection
{
    /**
     * @param $index
     * @return ProductVariant
     */
    public function at($index);

    /**
     * @return ProductVariant
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductVariant
     */
    public function map($data, $index);
}
