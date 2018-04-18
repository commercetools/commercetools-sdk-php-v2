<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductTypeSetKeyActionCollectionModel extends ProductTypeUpdateActionCollectionModel implements ProductTypeSetKeyActionCollection {

    /**
     * @param ProductTypeSetKeyAction $value
     * @return ProductTypeSetKeyActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductTypeSetKeyAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductTypeSetKeyAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductTypeSetKeyAction) {
            $data = $this->mapData(ProductTypeSetKeyAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
