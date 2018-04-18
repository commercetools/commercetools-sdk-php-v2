<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ShoppingListSetCustomFieldActionCollectionModel extends ShoppingListUpdateActionCollectionModel implements ShoppingListSetCustomFieldActionCollection {

    /**
     * @param ShoppingListSetCustomFieldAction $value
     * @return ShoppingListSetCustomFieldActionCollection
     */
    public function add($value) {
        if (!$value instanceof ShoppingListSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShoppingListSetCustomFieldAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShoppingListSetCustomFieldAction) {
            $data = $this->mapData(ShoppingListSetCustomFieldAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
