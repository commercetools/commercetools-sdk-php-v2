<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductSetProductPriceCustomTypeActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductSetProductPriceCustomTypeActionCollection
{

    /**
     * @param ProductSetProductPriceCustomTypeAction $value
     * @return ProductSetProductPriceCustomTypeActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductSetProductPriceCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductSetProductPriceCustomTypeAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductSetProductPriceCustomTypeAction) {
            $data = $this->mapData(ProductSetProductPriceCustomTypeAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
