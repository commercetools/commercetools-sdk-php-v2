<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ShoppingListSetKeyActionCollectionModel extends ShoppingListUpdateActionCollectionModel implements ShoppingListSetKeyActionCollection
{

    /**
     * @param ShoppingListSetKeyAction $value
     * @return ShoppingListSetKeyActionCollection
     */
    public function add($value) {
        if (!$value instanceof ShoppingListSetKeyAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShoppingListSetKeyAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShoppingListSetKeyAction) {
            $data = $this->mapData(ShoppingListSetKeyAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
