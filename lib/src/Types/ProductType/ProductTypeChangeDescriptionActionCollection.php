<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionCollection;


interface ProductTypeChangeDescriptionActionCollection extends ProductTypeUpdateActionCollection {
    /**
     * @param $index
     * @return ProductTypeChangeDescriptionAction
     */
    public function at($index);

    /**
     * @return ProductTypeChangeDescriptionAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductTypeChangeDescriptionAction
     */
    public function map($data, $index);
}
