<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ShoppingListSetCustomerActionCollectionModel extends ShoppingListUpdateActionCollectionModel implements ShoppingListSetCustomerActionCollection
{

    /**
     * @param ShoppingListSetCustomerAction $value
     * @return ShoppingListSetCustomerActionCollection
     */
    public function add($value) {
        if (!$value instanceof ShoppingListSetCustomerAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShoppingListSetCustomerAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShoppingListSetCustomerAction) {
            $data = $this->mapData(ShoppingListSetCustomerAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
