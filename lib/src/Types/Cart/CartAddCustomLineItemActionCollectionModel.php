<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartAddCustomLineItemActionCollectionModel extends CartUpdateActionCollectionModel implements CartAddCustomLineItemActionCollection {

    /**
     * @param CartAddCustomLineItemAction $value
     * @return CartAddCustomLineItemActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartAddCustomLineItemAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartAddCustomLineItemAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartAddCustomLineItemAction) {
            $data = $this->mapData(CartAddCustomLineItemAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
