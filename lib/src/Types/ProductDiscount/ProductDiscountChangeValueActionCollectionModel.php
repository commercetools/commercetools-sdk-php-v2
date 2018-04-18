<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Types\ProductDiscount\ProductDiscountUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductDiscountChangeValueActionCollectionModel extends ProductDiscountUpdateActionCollectionModel implements ProductDiscountChangeValueActionCollection {

    /**
     * @param ProductDiscountChangeValueAction $value
     * @return ProductDiscountChangeValueActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductDiscountChangeValueAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductDiscountChangeValueAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductDiscountChangeValueAction) {
            $data = $this->mapData(ProductDiscountChangeValueAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
