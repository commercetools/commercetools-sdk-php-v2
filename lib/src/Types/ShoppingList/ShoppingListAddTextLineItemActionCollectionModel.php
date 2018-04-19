<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ShoppingListAddTextLineItemActionCollectionModel extends ShoppingListUpdateActionCollectionModel implements ShoppingListAddTextLineItemActionCollection
{

    /**
     * @param ShoppingListAddTextLineItemAction $value
     * @return ShoppingListAddTextLineItemActionCollection
     */
    public function add($value) {
        if (!$value instanceof ShoppingListAddTextLineItemAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShoppingListAddTextLineItemAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShoppingListAddTextLineItemAction) {
            $data = $this->mapData(ShoppingListAddTextLineItemAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
