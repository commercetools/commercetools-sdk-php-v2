<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductTypeAddAttributeDefinitionActionCollectionModel extends ProductTypeUpdateActionCollectionModel implements ProductTypeAddAttributeDefinitionActionCollection
{

    /**
     * @param ProductTypeAddAttributeDefinitionAction $value
     * @return ProductTypeAddAttributeDefinitionActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductTypeAddAttributeDefinitionAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductTypeAddAttributeDefinitionAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductTypeAddAttributeDefinitionAction) {
            $data = $this->mapData(ProductTypeAddAttributeDefinitionAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
