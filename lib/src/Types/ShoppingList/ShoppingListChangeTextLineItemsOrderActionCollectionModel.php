<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ShoppingListChangeTextLineItemsOrderActionCollectionModel extends ShoppingListUpdateActionCollectionModel implements ShoppingListChangeTextLineItemsOrderActionCollection {

    /**
     * @param ShoppingListChangeTextLineItemsOrderAction $value
     * @return ShoppingListChangeTextLineItemsOrderActionCollection
     */
    public function add($value) {
        if (!$value instanceof ShoppingListChangeTextLineItemsOrderAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShoppingListChangeTextLineItemsOrderAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShoppingListChangeTextLineItemsOrderAction) {
            $data = $this->mapData(ShoppingListChangeTextLineItemsOrderAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
