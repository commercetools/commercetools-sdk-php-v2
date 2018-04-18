<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductTypeChangeDescriptionActionCollectionModel extends ProductTypeUpdateActionCollectionModel implements ProductTypeChangeDescriptionActionCollection {

    /**
     * @param ProductTypeChangeDescriptionAction $value
     * @return ProductTypeChangeDescriptionActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductTypeChangeDescriptionAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductTypeChangeDescriptionAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductTypeChangeDescriptionAction) {
            $data = $this->mapData(ProductTypeChangeDescriptionAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
