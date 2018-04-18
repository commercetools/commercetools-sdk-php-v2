<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductTypeAddPlainEnumValueActionCollectionModel extends ProductTypeUpdateActionCollectionModel implements ProductTypeAddPlainEnumValueActionCollection {

    /**
     * @param ProductTypeAddPlainEnumValueAction $value
     * @return ProductTypeAddPlainEnumValueActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductTypeAddPlainEnumValueAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductTypeAddPlainEnumValueAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductTypeAddPlainEnumValueAction) {
            $data = $this->mapData(ProductTypeAddPlainEnumValueAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
