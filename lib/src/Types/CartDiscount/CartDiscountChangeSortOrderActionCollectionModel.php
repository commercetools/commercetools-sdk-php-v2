<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartDiscountChangeSortOrderActionCollectionModel extends CartDiscountUpdateActionCollectionModel implements CartDiscountChangeSortOrderActionCollection
{

    /**
     * @param CartDiscountChangeSortOrderAction $value
     * @return CartDiscountChangeSortOrderActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartDiscountChangeSortOrderAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartDiscountChangeSortOrderAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartDiscountChangeSortOrderAction) {
            $data = $this->mapData(CartDiscountChangeSortOrderAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
