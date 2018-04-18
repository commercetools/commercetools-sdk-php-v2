<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartRemoveDiscountCodeActionCollectionModel extends CartUpdateActionCollectionModel implements CartRemoveDiscountCodeActionCollection {

    /**
     * @param CartRemoveDiscountCodeAction $value
     * @return CartRemoveDiscountCodeActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartRemoveDiscountCodeAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartRemoveDiscountCodeAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartRemoveDiscountCodeAction) {
            $data = $this->mapData(CartRemoveDiscountCodeAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
