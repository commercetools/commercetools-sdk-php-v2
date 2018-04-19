<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductTypeRemoveEnumValuesActionCollectionModel extends ProductTypeUpdateActionCollectionModel implements ProductTypeRemoveEnumValuesActionCollection
{

    /**
     * @param ProductTypeRemoveEnumValuesAction $value
     * @return ProductTypeRemoveEnumValuesActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductTypeRemoveEnumValuesAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductTypeRemoveEnumValuesAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductTypeRemoveEnumValuesAction) {
            $data = $this->mapData(ProductTypeRemoveEnumValuesAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
