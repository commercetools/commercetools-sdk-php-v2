<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartSetLineItemTaxAmountActionCollectionModel extends CartUpdateActionCollectionModel implements CartSetLineItemTaxAmountActionCollection
{

    /**
     * @param CartSetLineItemTaxAmountAction $value
     * @return CartSetLineItemTaxAmountActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartSetLineItemTaxAmountAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartSetLineItemTaxAmountAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartSetLineItemTaxAmountAction) {
            $data = $this->mapData(CartSetLineItemTaxAmountAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
