<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductTypeChangeLocalizedEnumValueOrderActionCollectionModel extends ProductTypeUpdateActionCollectionModel implements ProductTypeChangeLocalizedEnumValueOrderActionCollection
{

    /**
     * @param ProductTypeChangeLocalizedEnumValueOrderAction $value
     * @return ProductTypeChangeLocalizedEnumValueOrderActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductTypeChangeLocalizedEnumValueOrderAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductTypeChangeLocalizedEnumValueOrderAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductTypeChangeLocalizedEnumValueOrderAction) {
            $data = $this->mapData(ProductTypeChangeLocalizedEnumValueOrderAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
