<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartAddShoppingListActionCollectionModel extends CartUpdateActionCollectionModel implements CartAddShoppingListActionCollection
{

    /**
     * @param CartAddShoppingListAction $value
     * @return CartAddShoppingListActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartAddShoppingListAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartAddShoppingListAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartAddShoppingListAction) {
            $data = $this->mapData(CartAddShoppingListAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
