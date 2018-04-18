<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartChangeCustomLineItemQuantityActionCollectionModel extends CartUpdateActionCollectionModel implements CartChangeCustomLineItemQuantityActionCollection {

    /**
     * @param CartChangeCustomLineItemQuantityAction $value
     * @return CartChangeCustomLineItemQuantityActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartChangeCustomLineItemQuantityAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartChangeCustomLineItemQuantityAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartChangeCustomLineItemQuantityAction) {
            $data = $this->mapData(CartChangeCustomLineItemQuantityAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
