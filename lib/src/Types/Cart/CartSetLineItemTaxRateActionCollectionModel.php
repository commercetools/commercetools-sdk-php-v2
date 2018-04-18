<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartSetLineItemTaxRateActionCollectionModel extends CartUpdateActionCollectionModel implements CartSetLineItemTaxRateActionCollection {

    /**
     * @param CartSetLineItemTaxRateAction $value
     * @return CartSetLineItemTaxRateActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartSetLineItemTaxRateAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartSetLineItemTaxRateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartSetLineItemTaxRateAction) {
            $data = $this->mapData(CartSetLineItemTaxRateAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
