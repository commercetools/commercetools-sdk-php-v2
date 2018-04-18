<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductSetProductVariantKeyActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductSetProductVariantKeyActionCollection {

    /**
     * @param ProductSetProductVariantKeyAction $value
     * @return ProductSetProductVariantKeyActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductSetProductVariantKeyAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductSetProductVariantKeyAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductSetProductVariantKeyAction) {
            $data = $this->mapData(ProductSetProductVariantKeyAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
