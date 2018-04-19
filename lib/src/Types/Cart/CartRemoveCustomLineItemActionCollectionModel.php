<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartRemoveCustomLineItemActionCollectionModel extends CartUpdateActionCollectionModel implements CartRemoveCustomLineItemActionCollection
{

    /**
     * @param CartRemoveCustomLineItemAction $value
     * @return CartRemoveCustomLineItemActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartRemoveCustomLineItemAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartRemoveCustomLineItemAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartRemoveCustomLineItemAction) {
            $data = $this->mapData(CartRemoveCustomLineItemAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
