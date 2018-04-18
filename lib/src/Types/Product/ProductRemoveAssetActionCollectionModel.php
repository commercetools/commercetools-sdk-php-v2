<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductRemoveAssetActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductRemoveAssetActionCollection {

    /**
     * @param ProductRemoveAssetAction $value
     * @return ProductRemoveAssetActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductRemoveAssetAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductRemoveAssetAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductRemoveAssetAction) {
            $data = $this->mapData(ProductRemoveAssetAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
