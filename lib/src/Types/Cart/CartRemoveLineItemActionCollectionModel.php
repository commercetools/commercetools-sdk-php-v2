<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartRemoveLineItemActionCollectionModel extends CartUpdateActionCollectionModel implements CartRemoveLineItemActionCollection
{

    /**
     * @param CartRemoveLineItemAction $value
     * @return CartRemoveLineItemActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartRemoveLineItemAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartRemoveLineItemAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartRemoveLineItemAction) {
            $data = $this->mapData(CartRemoveLineItemAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
