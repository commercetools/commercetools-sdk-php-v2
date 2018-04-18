<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductSetAttributeActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductSetAttributeActionCollection {

    /**
     * @param ProductSetAttributeAction $value
     * @return ProductSetAttributeActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductSetAttributeAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductSetAttributeAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductSetAttributeAction) {
            $data = $this->mapData(ProductSetAttributeAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
