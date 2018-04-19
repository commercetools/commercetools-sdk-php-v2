<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartSetCustomLineItemCustomTypeActionCollectionModel extends CartUpdateActionCollectionModel implements CartSetCustomLineItemCustomTypeActionCollection
{

    /**
     * @param CartSetCustomLineItemCustomTypeAction $value
     * @return CartSetCustomLineItemCustomTypeActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartSetCustomLineItemCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartSetCustomLineItemCustomTypeAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartSetCustomLineItemCustomTypeAction) {
            $data = $this->mapData(CartSetCustomLineItemCustomTypeAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
