<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartRemovePaymentActionCollectionModel extends CartUpdateActionCollectionModel implements CartRemovePaymentActionCollection {

    /**
     * @param CartRemovePaymentAction $value
     * @return CartRemovePaymentActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartRemovePaymentAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartRemovePaymentAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartRemovePaymentAction) {
            $data = $this->mapData(CartRemovePaymentAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
