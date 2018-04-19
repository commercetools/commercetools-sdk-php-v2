<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductChangeAssetNameActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductChangeAssetNameActionCollection
{

    /**
     * @param ProductChangeAssetNameAction $value
     * @return ProductChangeAssetNameActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductChangeAssetNameAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductChangeAssetNameAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductChangeAssetNameAction) {
            $data = $this->mapData(ProductChangeAssetNameAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
