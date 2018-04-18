<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductTypeChangeNameActionCollectionModel extends ProductTypeUpdateActionCollectionModel implements ProductTypeChangeNameActionCollection {

    /**
     * @param ProductTypeChangeNameAction $value
     * @return ProductTypeChangeNameActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductTypeChangeNameAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductTypeChangeNameAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductTypeChangeNameAction) {
            $data = $this->mapData(ProductTypeChangeNameAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
