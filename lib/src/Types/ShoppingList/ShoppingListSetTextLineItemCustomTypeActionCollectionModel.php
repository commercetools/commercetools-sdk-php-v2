<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ShoppingListSetTextLineItemCustomTypeActionCollectionModel extends ShoppingListUpdateActionCollectionModel implements ShoppingListSetTextLineItemCustomTypeActionCollection {

    /**
     * @param ShoppingListSetTextLineItemCustomTypeAction $value
     * @return ShoppingListSetTextLineItemCustomTypeActionCollection
     */
    public function add($value) {
        if (!$value instanceof ShoppingListSetTextLineItemCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShoppingListSetTextLineItemCustomTypeAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShoppingListSetTextLineItemCustomTypeAction) {
            $data = $this->mapData(ShoppingListSetTextLineItemCustomTypeAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
