<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartSetShippingRateInputActionCollectionModel extends CartUpdateActionCollectionModel implements CartSetShippingRateInputActionCollection
{

    /**
     * @param CartSetShippingRateInputAction $value
     * @return CartSetShippingRateInputActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartSetShippingRateInputAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartSetShippingRateInputAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartSetShippingRateInputAction) {
            $data = $this->mapData(CartSetShippingRateInputAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
