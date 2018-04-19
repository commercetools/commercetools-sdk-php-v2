<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionCollection;


interface ProductTypeChangeIsSearchableActionCollection extends ProductTypeUpdateActionCollection
{
    /**
     * @param $index
     * @return ProductTypeChangeIsSearchableAction
     */
    public function at($index);

    /**
     * @return ProductTypeChangeIsSearchableAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductTypeChangeIsSearchableAction
     */
    public function map($data, $index);
}
