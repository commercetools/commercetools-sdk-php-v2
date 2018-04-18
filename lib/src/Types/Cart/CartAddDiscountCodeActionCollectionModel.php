<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartAddDiscountCodeActionCollectionModel extends CartUpdateActionCollectionModel implements CartAddDiscountCodeActionCollection {

    /**
     * @param CartAddDiscountCodeAction $value
     * @return CartAddDiscountCodeActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartAddDiscountCodeAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartAddDiscountCodeAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartAddDiscountCodeAction) {
            $data = $this->mapData(CartAddDiscountCodeAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
