<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductTypeRemoveAttributeDefinitionActionCollectionModel extends ProductTypeUpdateActionCollectionModel implements ProductTypeRemoveAttributeDefinitionActionCollection {

    /**
     * @param ProductTypeRemoveAttributeDefinitionAction $value
     * @return ProductTypeRemoveAttributeDefinitionActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductTypeRemoveAttributeDefinitionAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductTypeRemoveAttributeDefinitionAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductTypeRemoveAttributeDefinitionAction) {
            $data = $this->mapData(ProductTypeRemoveAttributeDefinitionAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
