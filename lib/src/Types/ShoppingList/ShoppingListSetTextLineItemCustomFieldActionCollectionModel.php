<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ShoppingListSetTextLineItemCustomFieldActionCollectionModel extends ShoppingListUpdateActionCollectionModel implements ShoppingListSetTextLineItemCustomFieldActionCollection
{

    /**
     * @param ShoppingListSetTextLineItemCustomFieldAction $value
     * @return ShoppingListSetTextLineItemCustomFieldActionCollection
     */
    public function add($value) {
        if (!$value instanceof ShoppingListSetTextLineItemCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShoppingListSetTextLineItemCustomFieldAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShoppingListSetTextLineItemCustomFieldAction) {
            $data = $this->mapData(ShoppingListSetTextLineItemCustomFieldAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
