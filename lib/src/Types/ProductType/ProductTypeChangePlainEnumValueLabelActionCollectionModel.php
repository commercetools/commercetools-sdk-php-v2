<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductTypeChangePlainEnumValueLabelActionCollectionModel extends ProductTypeUpdateActionCollectionModel implements ProductTypeChangePlainEnumValueLabelActionCollection
{

    /**
     * @param ProductTypeChangePlainEnumValueLabelAction $value
     * @return ProductTypeChangePlainEnumValueLabelActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductTypeChangePlainEnumValueLabelAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductTypeChangePlainEnumValueLabelAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductTypeChangePlainEnumValueLabelAction) {
            $data = $this->mapData(ProductTypeChangePlainEnumValueLabelAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
