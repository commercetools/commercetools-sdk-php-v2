<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartSetCustomLineItemTaxAmountActionCollectionModel extends CartUpdateActionCollectionModel implements CartSetCustomLineItemTaxAmountActionCollection
{

    /**
     * @param CartSetCustomLineItemTaxAmountAction $value
     * @return CartSetCustomLineItemTaxAmountActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartSetCustomLineItemTaxAmountAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartSetCustomLineItemTaxAmountAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartSetCustomLineItemTaxAmountAction) {
            $data = $this->mapData(CartSetCustomLineItemTaxAmountAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
