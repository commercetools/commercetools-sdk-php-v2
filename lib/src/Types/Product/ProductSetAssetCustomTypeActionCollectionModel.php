<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductSetAssetCustomTypeActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductSetAssetCustomTypeActionCollection {

    /**
     * @param ProductSetAssetCustomTypeAction $value
     * @return ProductSetAssetCustomTypeActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductSetAssetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductSetAssetCustomTypeAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductSetAssetCustomTypeAction) {
            $data = $this->mapData(ProductSetAssetCustomTypeAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
