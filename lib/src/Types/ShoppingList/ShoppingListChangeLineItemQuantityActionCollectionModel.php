<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ShoppingListChangeLineItemQuantityActionCollectionModel extends ShoppingListUpdateActionCollectionModel implements ShoppingListChangeLineItemQuantityActionCollection
{

    /**
     * @param ShoppingListChangeLineItemQuantityAction $value
     * @return ShoppingListChangeLineItemQuantityActionCollection
     */
    public function add($value) {
        if (!$value instanceof ShoppingListChangeLineItemQuantityAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShoppingListChangeLineItemQuantityAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShoppingListChangeLineItemQuantityAction) {
            $data = $this->mapData(ShoppingListChangeLineItemQuantityAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
