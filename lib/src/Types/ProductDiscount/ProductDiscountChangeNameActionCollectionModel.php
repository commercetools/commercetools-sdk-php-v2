<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Types\ProductDiscount\ProductDiscountUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductDiscountChangeNameActionCollectionModel extends ProductDiscountUpdateActionCollectionModel implements ProductDiscountChangeNameActionCollection
{

    /**
     * @param ProductDiscountChangeNameAction $value
     * @return ProductDiscountChangeNameActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductDiscountChangeNameAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductDiscountChangeNameAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductDiscountChangeNameAction) {
            $data = $this->mapData(ProductDiscountChangeNameAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
