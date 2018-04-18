<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductSetDiscountedPriceActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductSetDiscountedPriceActionCollection {

    /**
     * @param ProductSetDiscountedPriceAction $value
     * @return ProductSetDiscountedPriceActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductSetDiscountedPriceAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductSetDiscountedPriceAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductSetDiscountedPriceAction) {
            $data = $this->mapData(ProductSetDiscountedPriceAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
