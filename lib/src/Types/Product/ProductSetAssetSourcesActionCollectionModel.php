<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductSetAssetSourcesActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductSetAssetSourcesActionCollection
{

    /**
     * @param ProductSetAssetSourcesAction $value
     * @return ProductSetAssetSourcesActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductSetAssetSourcesAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductSetAssetSourcesAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductSetAssetSourcesAction) {
            $data = $this->mapData(ProductSetAssetSourcesAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
