<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ShoppingListAddLineItemActionCollectionModel extends ShoppingListUpdateActionCollectionModel implements ShoppingListAddLineItemActionCollection {

    /**
     * @param ShoppingListAddLineItemAction $value
     * @return ShoppingListAddLineItemActionCollection
     */
    public function add($value) {
        if (!$value instanceof ShoppingListAddLineItemAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShoppingListAddLineItemAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShoppingListAddLineItemAction) {
            $data = $this->mapData(ShoppingListAddLineItemAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
