<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ShoppingListRemoveTextLineItemActionCollectionModel extends ShoppingListUpdateActionCollectionModel implements ShoppingListRemoveTextLineItemActionCollection
{

    /**
     * @param ShoppingListRemoveTextLineItemAction $value
     * @return ShoppingListRemoveTextLineItemActionCollection
     */
    public function add($value) {
        if (!$value instanceof ShoppingListRemoveTextLineItemAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShoppingListRemoveTextLineItemAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShoppingListRemoveTextLineItemAction) {
            $data = $this->mapData(ShoppingListRemoveTextLineItemAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
