<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ShoppingListSetLineItemCustomFieldActionCollectionModel extends ShoppingListUpdateActionCollectionModel implements ShoppingListSetLineItemCustomFieldActionCollection
{

    /**
     * @param ShoppingListSetLineItemCustomFieldAction $value
     * @return ShoppingListSetLineItemCustomFieldActionCollection
     */
    public function add($value) {
        if (!$value instanceof ShoppingListSetLineItemCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShoppingListSetLineItemCustomFieldAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShoppingListSetLineItemCustomFieldAction) {
            $data = $this->mapData(ShoppingListSetLineItemCustomFieldAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
