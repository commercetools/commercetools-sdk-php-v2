<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductSetAttributeInAllVariantsActionCollection extends ProductUpdateActionCollection
{
    /**
     * @param $index
     * @return ProductSetAttributeInAllVariantsAction
     */
    public function at($index);

    /**
     * @return ProductSetAttributeInAllVariantsAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductSetAttributeInAllVariantsAction
     */
    public function map($data, $index);
}
