<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartSetCustomLineItemTaxRateActionCollectionModel extends CartUpdateActionCollectionModel implements CartSetCustomLineItemTaxRateActionCollection {

    /**
     * @param CartSetCustomLineItemTaxRateAction $value
     * @return CartSetCustomLineItemTaxRateActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartSetCustomLineItemTaxRateAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartSetCustomLineItemTaxRateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartSetCustomLineItemTaxRateAction) {
            $data = $this->mapData(CartSetCustomLineItemTaxRateAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
