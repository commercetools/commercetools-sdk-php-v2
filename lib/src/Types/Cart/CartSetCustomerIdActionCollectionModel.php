<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartSetCustomerIdActionCollectionModel extends CartUpdateActionCollectionModel implements CartSetCustomerIdActionCollection {

    /**
     * @param CartSetCustomerIdAction $value
     * @return CartSetCustomerIdActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartSetCustomerIdAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartSetCustomerIdAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartSetCustomerIdAction) {
            $data = $this->mapData(CartSetCustomerIdAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
