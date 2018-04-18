<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductRemovePriceActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductRemovePriceActionCollection {

    /**
     * @param ProductRemovePriceAction $value
     * @return ProductRemovePriceActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductRemovePriceAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductRemovePriceAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductRemovePriceAction) {
            $data = $this->mapData(ProductRemovePriceAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
