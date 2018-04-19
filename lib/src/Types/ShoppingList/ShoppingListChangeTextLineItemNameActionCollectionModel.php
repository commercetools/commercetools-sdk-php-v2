<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ShoppingListChangeTextLineItemNameActionCollectionModel extends ShoppingListUpdateActionCollectionModel implements ShoppingListChangeTextLineItemNameActionCollection
{

    /**
     * @param ShoppingListChangeTextLineItemNameAction $value
     * @return ShoppingListChangeTextLineItemNameActionCollection
     */
    public function add($value) {
        if (!$value instanceof ShoppingListChangeTextLineItemNameAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShoppingListChangeTextLineItemNameAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShoppingListChangeTextLineItemNameAction) {
            $data = $this->mapData(ShoppingListChangeTextLineItemNameAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
