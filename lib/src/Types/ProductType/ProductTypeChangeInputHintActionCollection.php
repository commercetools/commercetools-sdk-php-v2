<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionCollection;


interface ProductTypeChangeInputHintActionCollection extends ProductTypeUpdateActionCollection {
    /**
     * @param $index
     * @return ProductTypeChangeInputHintAction
     */
    public function at($index);

    /**
     * @return ProductTypeChangeInputHintAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductTypeChangeInputHintAction
     */
    public function map($data, $index);
}
