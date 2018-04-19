<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductChangeAssetOrderActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductChangeAssetOrderActionCollection
{

    /**
     * @param ProductChangeAssetOrderAction $value
     * @return ProductChangeAssetOrderActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductChangeAssetOrderAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductChangeAssetOrderAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductChangeAssetOrderAction) {
            $data = $this->mapData(ProductChangeAssetOrderAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
