<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductPublishActionCollection extends ProductUpdateActionCollection {
    /**
     * @param $index
     * @return ProductPublishAction
     */
    public function at($index);

    /**
     * @return ProductPublishAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductPublishAction
     */
    public function map($data, $index);
}
