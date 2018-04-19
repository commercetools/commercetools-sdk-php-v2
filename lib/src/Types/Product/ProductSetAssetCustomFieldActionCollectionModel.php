<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductSetAssetCustomFieldActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductSetAssetCustomFieldActionCollection
{

    /**
     * @param ProductSetAssetCustomFieldAction $value
     * @return ProductSetAssetCustomFieldActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductSetAssetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductSetAssetCustomFieldAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductSetAssetCustomFieldAction) {
            $data = $this->mapData(ProductSetAssetCustomFieldAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
