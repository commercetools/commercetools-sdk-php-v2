<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartSetCustomerEmailActionCollectionModel extends CartUpdateActionCollectionModel implements CartSetCustomerEmailActionCollection
{

    /**
     * @param CartSetCustomerEmailAction $value
     * @return CartSetCustomerEmailActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartSetCustomerEmailAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartSetCustomerEmailAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartSetCustomerEmailAction) {
            $data = $this->mapData(CartSetCustomerEmailAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
