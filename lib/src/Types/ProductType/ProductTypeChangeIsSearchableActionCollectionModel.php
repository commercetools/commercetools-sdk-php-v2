<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductTypeChangeIsSearchableActionCollectionModel extends ProductTypeUpdateActionCollectionModel implements ProductTypeChangeIsSearchableActionCollection {

    /**
     * @param ProductTypeChangeIsSearchableAction $value
     * @return ProductTypeChangeIsSearchableActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductTypeChangeIsSearchableAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductTypeChangeIsSearchableAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductTypeChangeIsSearchableAction) {
            $data = $this->mapData(ProductTypeChangeIsSearchableAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
