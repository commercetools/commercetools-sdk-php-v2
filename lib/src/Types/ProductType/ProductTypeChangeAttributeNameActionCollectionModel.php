<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductTypeChangeAttributeNameActionCollectionModel extends ProductTypeUpdateActionCollectionModel implements ProductTypeChangeAttributeNameActionCollection {

    /**
     * @param ProductTypeChangeAttributeNameAction $value
     * @return ProductTypeChangeAttributeNameActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductTypeChangeAttributeNameAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductTypeChangeAttributeNameAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductTypeChangeAttributeNameAction) {
            $data = $this->mapData(ProductTypeChangeAttributeNameAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
