<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductChangeMasterVariantActionCollection extends ProductUpdateActionCollection
{
    /**
     * @param $index
     * @return ProductChangeMasterVariantAction
     */
    public function at($index);

    /**
     * @return ProductChangeMasterVariantAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductChangeMasterVariantAction
     */
    public function map($data, $index);
}
