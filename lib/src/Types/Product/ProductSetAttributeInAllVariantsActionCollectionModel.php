<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductSetAttributeInAllVariantsActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductSetAttributeInAllVariantsActionCollection {

    /**
     * @param ProductSetAttributeInAllVariantsAction $value
     * @return ProductSetAttributeInAllVariantsActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductSetAttributeInAllVariantsAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductSetAttributeInAllVariantsAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductSetAttributeInAllVariantsAction) {
            $data = $this->mapData(ProductSetAttributeInAllVariantsAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
