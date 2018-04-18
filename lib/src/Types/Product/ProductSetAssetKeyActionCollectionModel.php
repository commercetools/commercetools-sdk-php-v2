<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductSetAssetKeyActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductSetAssetKeyActionCollection {

    /**
     * @param ProductSetAssetKeyAction $value
     * @return ProductSetAssetKeyActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductSetAssetKeyAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductSetAssetKeyAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductSetAssetKeyAction) {
            $data = $this->mapData(ProductSetAssetKeyAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
