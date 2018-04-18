<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductSetAssetTagsActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductSetAssetTagsActionCollection {

    /**
     * @param ProductSetAssetTagsAction $value
     * @return ProductSetAssetTagsActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductSetAssetTagsAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductSetAssetTagsAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductSetAssetTagsAction) {
            $data = $this->mapData(ProductSetAssetTagsAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
