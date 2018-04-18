<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductTypeChangePlainEnumValueOrderActionCollectionModel extends ProductTypeUpdateActionCollectionModel implements ProductTypeChangePlainEnumValueOrderActionCollection {

    /**
     * @param ProductTypeChangePlainEnumValueOrderAction $value
     * @return ProductTypeChangePlainEnumValueOrderActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductTypeChangePlainEnumValueOrderAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductTypeChangePlainEnumValueOrderAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductTypeChangePlainEnumValueOrderAction) {
            $data = $this->mapData(ProductTypeChangePlainEnumValueOrderAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
