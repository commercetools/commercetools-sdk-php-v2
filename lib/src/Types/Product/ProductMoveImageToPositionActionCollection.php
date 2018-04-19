<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductMoveImageToPositionActionCollection extends ProductUpdateActionCollection
{
    /**
     * @param $index
     * @return ProductMoveImageToPositionAction
     */
    public function at($index);

    /**
     * @return ProductMoveImageToPositionAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductMoveImageToPositionAction
     */
    public function map($data, $index);
}
