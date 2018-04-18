<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionCollection;


interface ProductTypeAddAttributeDefinitionActionCollection extends ProductTypeUpdateActionCollection {
    /**
     * @param $index
     * @return ProductTypeAddAttributeDefinitionAction
     */
    public function at($index);

    /**
     * @return ProductTypeAddAttributeDefinitionAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductTypeAddAttributeDefinitionAction
     */
    public function map($data, $index);
}
