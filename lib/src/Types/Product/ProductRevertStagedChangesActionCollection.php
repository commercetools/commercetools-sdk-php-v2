<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductRevertStagedChangesActionCollection extends ProductUpdateActionCollection {
    /**
     * @param $index
     * @return ProductRevertStagedChangesAction
     */
    public function at($index);

    /**
     * @return ProductRevertStagedChangesAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductRevertStagedChangesAction
     */
    public function map($data, $index);
}
