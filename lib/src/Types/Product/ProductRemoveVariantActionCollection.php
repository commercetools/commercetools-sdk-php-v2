<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductRemoveVariantActionCollection extends ProductUpdateActionCollection
{
    /**
     * @param $index
     * @return ProductRemoveVariantAction
     */
    public function at($index);

    /**
     * @return ProductRemoveVariantAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductRemoveVariantAction
     */
    public function map($data, $index);
}
