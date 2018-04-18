<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductUnpublishActionCollection extends ProductUpdateActionCollection {
    /**
     * @param $index
     * @return ProductUnpublishAction
     */
    public function at($index);

    /**
     * @return ProductUnpublishAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductUnpublishAction
     */
    public function map($data, $index);
}
