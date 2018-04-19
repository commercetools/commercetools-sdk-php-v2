<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionCollection;


interface ProductTypeSetInputTipActionCollection extends ProductTypeUpdateActionCollection
{
    /**
     * @param $index
     * @return ProductTypeSetInputTipAction
     */
    public function at($index);

    /**
     * @return ProductTypeSetInputTipAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductTypeSetInputTipAction
     */
    public function map($data, $index);
}
