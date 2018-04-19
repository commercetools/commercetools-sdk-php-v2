<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ShoppingListSetLineItemCustomTypeActionCollectionModel extends ShoppingListUpdateActionCollectionModel implements ShoppingListSetLineItemCustomTypeActionCollection
{

    /**
     * @param ShoppingListSetLineItemCustomTypeAction $value
     * @return ShoppingListSetLineItemCustomTypeActionCollection
     */
    public function add($value) {
        if (!$value instanceof ShoppingListSetLineItemCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShoppingListSetLineItemCustomTypeAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShoppingListSetLineItemCustomTypeAction) {
            $data = $this->mapData(ShoppingListSetLineItemCustomTypeAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
