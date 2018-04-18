<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ShoppingListSetTextLineItemDescriptionActionCollectionModel extends ShoppingListUpdateActionCollectionModel implements ShoppingListSetTextLineItemDescriptionActionCollection {

    /**
     * @param ShoppingListSetTextLineItemDescriptionAction $value
     * @return ShoppingListSetTextLineItemDescriptionActionCollection
     */
    public function add($value) {
        if (!$value instanceof ShoppingListSetTextLineItemDescriptionAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShoppingListSetTextLineItemDescriptionAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShoppingListSetTextLineItemDescriptionAction) {
            $data = $this->mapData(ShoppingListSetTextLineItemDescriptionAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
