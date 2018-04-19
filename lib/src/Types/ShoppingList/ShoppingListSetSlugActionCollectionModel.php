<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ShoppingListSetSlugActionCollectionModel extends ShoppingListUpdateActionCollectionModel implements ShoppingListSetSlugActionCollection
{

    /**
     * @param ShoppingListSetSlugAction $value
     * @return ShoppingListSetSlugActionCollection
     */
    public function add($value) {
        if (!$value instanceof ShoppingListSetSlugAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShoppingListSetSlugAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShoppingListSetSlugAction) {
            $data = $this->mapData(ShoppingListSetSlugAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
