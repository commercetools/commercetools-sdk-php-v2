<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartAddLineItemActionCollectionModel extends CartUpdateActionCollectionModel implements CartAddLineItemActionCollection
{

    /**
     * @param CartAddLineItemAction $value
     * @return CartAddLineItemActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartAddLineItemAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartAddLineItemAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartAddLineItemAction) {
            $data = $this->mapData(CartAddLineItemAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
