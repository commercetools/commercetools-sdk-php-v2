<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductAddVariantActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductAddVariantActionCollection {

    /**
     * @param ProductAddVariantAction $value
     * @return ProductAddVariantActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductAddVariantAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductAddVariantAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductAddVariantAction) {
            $data = $this->mapData(ProductAddVariantAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
