<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartSetShippingMethodTaxRateActionCollectionModel extends CartUpdateActionCollectionModel implements CartSetShippingMethodTaxRateActionCollection {

    /**
     * @param CartSetShippingMethodTaxRateAction $value
     * @return CartSetShippingMethodTaxRateActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartSetShippingMethodTaxRateAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartSetShippingMethodTaxRateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartSetShippingMethodTaxRateAction) {
            $data = $this->mapData(CartSetShippingMethodTaxRateAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
