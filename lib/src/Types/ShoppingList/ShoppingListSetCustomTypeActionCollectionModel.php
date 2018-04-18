<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ShoppingListSetCustomTypeActionCollectionModel extends ShoppingListUpdateActionCollectionModel implements ShoppingListSetCustomTypeActionCollection {

    /**
     * @param ShoppingListSetCustomTypeAction $value
     * @return ShoppingListSetCustomTypeActionCollection
     */
    public function add($value) {
        if (!$value instanceof ShoppingListSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShoppingListSetCustomTypeAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShoppingListSetCustomTypeAction) {
            $data = $this->mapData(ShoppingListSetCustomTypeAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
