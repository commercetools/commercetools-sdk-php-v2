<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductSetAssetDescriptionActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductSetAssetDescriptionActionCollection {

    /**
     * @param ProductSetAssetDescriptionAction $value
     * @return ProductSetAssetDescriptionActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductSetAssetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductSetAssetDescriptionAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductSetAssetDescriptionAction) {
            $data = $this->mapData(ProductSetAssetDescriptionAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
