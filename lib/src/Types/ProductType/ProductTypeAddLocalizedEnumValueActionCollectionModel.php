<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductTypeAddLocalizedEnumValueActionCollectionModel extends ProductTypeUpdateActionCollectionModel implements ProductTypeAddLocalizedEnumValueActionCollection {

    /**
     * @param ProductTypeAddLocalizedEnumValueAction $value
     * @return ProductTypeAddLocalizedEnumValueActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductTypeAddLocalizedEnumValueAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductTypeAddLocalizedEnumValueAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductTypeAddLocalizedEnumValueAction) {
            $data = $this->mapData(ProductTypeAddLocalizedEnumValueAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
