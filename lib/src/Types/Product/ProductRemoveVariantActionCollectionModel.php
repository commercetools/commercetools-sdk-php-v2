<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductRemoveVariantActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductRemoveVariantActionCollection {

    /**
     * @param ProductRemoveVariantAction $value
     * @return ProductRemoveVariantActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductRemoveVariantAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductRemoveVariantAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductRemoveVariantAction) {
            $data = $this->mapData(ProductRemoveVariantAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
