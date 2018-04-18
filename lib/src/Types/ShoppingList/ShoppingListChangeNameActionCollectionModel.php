<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ShoppingListChangeNameActionCollectionModel extends ShoppingListUpdateActionCollectionModel implements ShoppingListChangeNameActionCollection {

    /**
     * @param ShoppingListChangeNameAction $value
     * @return ShoppingListChangeNameActionCollection
     */
    public function add($value) {
        if (!$value instanceof ShoppingListChangeNameAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShoppingListChangeNameAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShoppingListChangeNameAction) {
            $data = $this->mapData(ShoppingListChangeNameAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
