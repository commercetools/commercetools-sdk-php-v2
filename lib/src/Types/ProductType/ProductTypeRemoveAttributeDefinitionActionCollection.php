<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionCollection;


interface ProductTypeRemoveAttributeDefinitionActionCollection extends ProductTypeUpdateActionCollection
{
    /**
     * @param $index
     * @return ProductTypeRemoveAttributeDefinitionAction
     */
    public function at($index);

    /**
     * @return ProductTypeRemoveAttributeDefinitionAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductTypeRemoveAttributeDefinitionAction
     */
    public function map($data, $index);
}
