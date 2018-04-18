<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartChangeCustomLineItemMoneyActionCollectionModel extends CartUpdateActionCollectionModel implements CartChangeCustomLineItemMoneyActionCollection {

    /**
     * @param CartChangeCustomLineItemMoneyAction $value
     * @return CartChangeCustomLineItemMoneyActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartChangeCustomLineItemMoneyAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartChangeCustomLineItemMoneyAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartChangeCustomLineItemMoneyAction) {
            $data = $this->mapData(CartChangeCustomLineItemMoneyAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
