<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartDiscountSetValidUntilActionCollectionModel extends CartDiscountUpdateActionCollectionModel implements CartDiscountSetValidUntilActionCollection
{

    /**
     * @param CartDiscountSetValidUntilAction $value
     * @return CartDiscountSetValidUntilActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartDiscountSetValidUntilAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartDiscountSetValidUntilAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartDiscountSetValidUntilAction) {
            $data = $this->mapData(CartDiscountSetValidUntilAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
