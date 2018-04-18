<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartSetShippingMethodTaxAmountActionCollectionModel extends CartUpdateActionCollectionModel implements CartSetShippingMethodTaxAmountActionCollection {

    /**
     * @param CartSetShippingMethodTaxAmountAction $value
     * @return CartSetShippingMethodTaxAmountActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartSetShippingMethodTaxAmountAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartSetShippingMethodTaxAmountAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartSetShippingMethodTaxAmountAction) {
            $data = $this->mapData(CartSetShippingMethodTaxAmountAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
