<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductTypeChangeEnumKeyActionCollectionModel extends ProductTypeUpdateActionCollectionModel implements ProductTypeChangeEnumKeyActionCollection
{

    /**
     * @param ProductTypeChangeEnumKeyAction $value
     * @return ProductTypeChangeEnumKeyActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductTypeChangeEnumKeyAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductTypeChangeEnumKeyAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductTypeChangeEnumKeyAction) {
            $data = $this->mapData(ProductTypeChangeEnumKeyAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
