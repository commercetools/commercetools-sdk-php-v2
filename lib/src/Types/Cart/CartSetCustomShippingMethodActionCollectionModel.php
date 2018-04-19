<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartSetCustomShippingMethodActionCollectionModel extends CartUpdateActionCollectionModel implements CartSetCustomShippingMethodActionCollection
{

    /**
     * @param CartSetCustomShippingMethodAction $value
     * @return CartSetCustomShippingMethodActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartSetCustomShippingMethodAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartSetCustomShippingMethodAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartSetCustomShippingMethodAction) {
            $data = $this->mapData(CartSetCustomShippingMethodAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
