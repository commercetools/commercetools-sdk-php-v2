<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\Collection;

interface ProductCatalogDataCollection extends Collection {
    /**
     * @param $index
     * @return ProductCatalogData
     */
    public function at($index);

    /**
     * @return ProductCatalogData
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductCatalogData
     */
    public function map($data, $index);
}
