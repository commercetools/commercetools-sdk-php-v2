<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductLegacySetSkuActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductLegacySetSkuActionCollection
{

    /**
     * @param ProductLegacySetSkuAction $value
     * @return ProductLegacySetSkuActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductLegacySetSkuAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductLegacySetSkuAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductLegacySetSkuAction) {
            $data = $this->mapData(ProductLegacySetSkuAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
