<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ShoppingListRemoveLineItemActionCollectionModel extends ShoppingListUpdateActionCollectionModel implements ShoppingListRemoveLineItemActionCollection {

    /**
     * @param ShoppingListRemoveLineItemAction $value
     * @return ShoppingListRemoveLineItemActionCollection
     */
    public function add($value) {
        if (!$value instanceof ShoppingListRemoveLineItemAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShoppingListRemoveLineItemAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShoppingListRemoveLineItemAction) {
            $data = $this->mapData(ShoppingListRemoveLineItemAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
