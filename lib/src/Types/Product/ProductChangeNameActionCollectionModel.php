<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductChangeNameActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductChangeNameActionCollection {

    /**
     * @param ProductChangeNameAction $value
     * @return ProductChangeNameActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductChangeNameAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductChangeNameAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductChangeNameAction) {
            $data = $this->mapData(ProductChangeNameAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
