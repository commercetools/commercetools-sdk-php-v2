<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartAddPaymentActionCollectionModel extends CartUpdateActionCollectionModel implements CartAddPaymentActionCollection {

    /**
     * @param CartAddPaymentAction $value
     * @return CartAddPaymentActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartAddPaymentAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartAddPaymentAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartAddPaymentAction) {
            $data = $this->mapData(CartAddPaymentAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
