<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartSetCustomerGroupActionCollectionModel extends CartUpdateActionCollectionModel implements CartSetCustomerGroupActionCollection {

    /**
     * @param CartSetCustomerGroupAction $value
     * @return CartSetCustomerGroupActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartSetCustomerGroupAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartSetCustomerGroupAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartSetCustomerGroupAction) {
            $data = $this->mapData(CartSetCustomerGroupAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
