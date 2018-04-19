<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductSetSkuActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductSetSkuActionCollection
{

    /**
     * @param ProductSetSkuAction $value
     * @return ProductSetSkuActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductSetSkuAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductSetSkuAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductSetSkuAction) {
            $data = $this->mapData(ProductSetSkuAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
