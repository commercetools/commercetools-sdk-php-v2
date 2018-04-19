<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductAddPriceActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductAddPriceActionCollection
{

    /**
     * @param ProductAddPriceAction $value
     * @return ProductAddPriceActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductAddPriceAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductAddPriceAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductAddPriceAction) {
            $data = $this->mapData(ProductAddPriceAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
