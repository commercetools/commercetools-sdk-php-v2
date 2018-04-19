<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Types\ProductDiscount\ProductDiscountUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductDiscountChangeIsActiveActionCollectionModel extends ProductDiscountUpdateActionCollectionModel implements ProductDiscountChangeIsActiveActionCollection
{

    /**
     * @param ProductDiscountChangeIsActiveAction $value
     * @return ProductDiscountChangeIsActiveActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductDiscountChangeIsActiveAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductDiscountChangeIsActiveAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductDiscountChangeIsActiveAction) {
            $data = $this->mapData(ProductDiscountChangeIsActiveAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
