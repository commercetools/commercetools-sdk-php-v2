<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\UpdateActionCollection;


interface ProductUpdateActionCollection extends UpdateActionCollection
{
    /**
     * @param $index
     * @return ProductUpdateAction
     */
    public function at($index);

    /**
     * @return ProductUpdateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductUpdateAction
     */
    public function map($data, $index);
}
