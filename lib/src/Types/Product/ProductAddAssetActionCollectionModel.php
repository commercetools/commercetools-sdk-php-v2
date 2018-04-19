<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductAddAssetActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductAddAssetActionCollection
{

    /**
     * @param ProductAddAssetAction $value
     * @return ProductAddAssetActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductAddAssetAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductAddAssetAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductAddAssetAction) {
            $data = $this->mapData(ProductAddAssetAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
