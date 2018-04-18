<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartSetLineItemPriceActionCollectionModel extends CartUpdateActionCollectionModel implements CartSetLineItemPriceActionCollection {

    /**
     * @param CartSetLineItemPriceAction $value
     * @return CartSetLineItemPriceActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartSetLineItemPriceAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartSetLineItemPriceAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartSetLineItemPriceAction) {
            $data = $this->mapData(CartSetLineItemPriceAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
