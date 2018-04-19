<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductTypeChangeLocalizedEnumValueLabelActionCollectionModel extends ProductTypeUpdateActionCollectionModel implements ProductTypeChangeLocalizedEnumValueLabelActionCollection
{

    /**
     * @param ProductTypeChangeLocalizedEnumValueLabelAction $value
     * @return ProductTypeChangeLocalizedEnumValueLabelActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductTypeChangeLocalizedEnumValueLabelAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductTypeChangeLocalizedEnumValueLabelAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductTypeChangeLocalizedEnumValueLabelAction) {
            $data = $this->mapData(ProductTypeChangeLocalizedEnumValueLabelAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
