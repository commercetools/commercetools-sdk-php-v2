<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartSetShippingAddressActionCollectionModel extends CartUpdateActionCollectionModel implements CartSetShippingAddressActionCollection {

    /**
     * @param CartSetShippingAddressAction $value
     * @return CartSetShippingAddressActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartSetShippingAddressAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartSetShippingAddressAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartSetShippingAddressAction) {
            $data = $this->mapData(CartSetShippingAddressAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
