<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductSetPricesActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductSetPricesActionCollection {

    /**
     * @param ProductSetPricesAction $value
     * @return ProductSetPricesActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductSetPricesAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductSetPricesAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductSetPricesAction) {
            $data = $this->mapData(ProductSetPricesAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
