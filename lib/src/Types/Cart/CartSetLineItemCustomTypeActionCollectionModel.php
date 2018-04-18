<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartSetLineItemCustomTypeActionCollectionModel extends CartUpdateActionCollectionModel implements CartSetLineItemCustomTypeActionCollection {

    /**
     * @param CartSetLineItemCustomTypeAction $value
     * @return CartSetLineItemCustomTypeActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartSetLineItemCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartSetLineItemCustomTypeAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartSetLineItemCustomTypeAction) {
            $data = $this->mapData(CartSetLineItemCustomTypeAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
