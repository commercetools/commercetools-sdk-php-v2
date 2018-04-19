<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ShoppingListChangeLineItemsOrderActionCollectionModel extends ShoppingListUpdateActionCollectionModel implements ShoppingListChangeLineItemsOrderActionCollection
{

    /**
     * @param ShoppingListChangeLineItemsOrderAction $value
     * @return ShoppingListChangeLineItemsOrderActionCollection
     */
    public function add($value) {
        if (!$value instanceof ShoppingListChangeLineItemsOrderAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShoppingListChangeLineItemsOrderAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShoppingListChangeLineItemsOrderAction) {
            $data = $this->mapData(ShoppingListChangeLineItemsOrderAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
