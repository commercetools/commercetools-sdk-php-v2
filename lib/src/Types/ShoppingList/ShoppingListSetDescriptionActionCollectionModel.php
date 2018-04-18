<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ShoppingListSetDescriptionActionCollectionModel extends ShoppingListUpdateActionCollectionModel implements ShoppingListSetDescriptionActionCollection {

    /**
     * @param ShoppingListSetDescriptionAction $value
     * @return ShoppingListSetDescriptionActionCollection
     */
    public function add($value) {
        if (!$value instanceof ShoppingListSetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShoppingListSetDescriptionAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShoppingListSetDescriptionAction) {
            $data = $this->mapData(ShoppingListSetDescriptionAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
