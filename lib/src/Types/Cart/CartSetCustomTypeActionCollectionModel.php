<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartSetCustomTypeActionCollectionModel extends CartUpdateActionCollectionModel implements CartSetCustomTypeActionCollection
{

    /**
     * @param CartSetCustomTypeAction $value
     * @return CartSetCustomTypeActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartSetCustomTypeAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartSetCustomTypeAction) {
            $data = $this->mapData(CartSetCustomTypeAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
