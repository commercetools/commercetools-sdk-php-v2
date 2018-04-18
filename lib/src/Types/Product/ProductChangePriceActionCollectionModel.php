<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductChangePriceActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductChangePriceActionCollection {

    /**
     * @param ProductChangePriceAction $value
     * @return ProductChangePriceActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductChangePriceAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductChangePriceAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductChangePriceAction) {
            $data = $this->mapData(ProductChangePriceAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
