<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartSetBillingAddressActionCollectionModel extends CartUpdateActionCollectionModel implements CartSetBillingAddressActionCollection
{

    /**
     * @param CartSetBillingAddressAction $value
     * @return CartSetBillingAddressActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartSetBillingAddressAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartSetBillingAddressAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartSetBillingAddressAction) {
            $data = $this->mapData(CartSetBillingAddressAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
