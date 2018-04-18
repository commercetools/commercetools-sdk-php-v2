<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductSetProductPriceCustomFieldActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductSetProductPriceCustomFieldActionCollection {

    /**
     * @param ProductSetProductPriceCustomFieldAction $value
     * @return ProductSetProductPriceCustomFieldActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductSetProductPriceCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductSetProductPriceCustomFieldAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductSetProductPriceCustomFieldAction) {
            $data = $this->mapData(ProductSetProductPriceCustomFieldAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
