<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductRemoveFromCategoryActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductRemoveFromCategoryActionCollection {

    /**
     * @param ProductRemoveFromCategoryAction $value
     * @return ProductRemoveFromCategoryActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductRemoveFromCategoryAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductRemoveFromCategoryAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductRemoveFromCategoryAction) {
            $data = $this->mapData(ProductRemoveFromCategoryAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
