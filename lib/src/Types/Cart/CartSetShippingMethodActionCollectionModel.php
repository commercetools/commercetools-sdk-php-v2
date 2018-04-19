<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartSetShippingMethodActionCollectionModel extends CartUpdateActionCollectionModel implements CartSetShippingMethodActionCollection
{

    /**
     * @param CartSetShippingMethodAction $value
     * @return CartSetShippingMethodActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartSetShippingMethodAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartSetShippingMethodAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartSetShippingMethodAction) {
            $data = $this->mapData(CartSetShippingMethodAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
