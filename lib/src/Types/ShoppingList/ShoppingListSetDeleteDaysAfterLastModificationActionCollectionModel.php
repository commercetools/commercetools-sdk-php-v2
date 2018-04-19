<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ShoppingListSetDeleteDaysAfterLastModificationActionCollectionModel extends ShoppingListUpdateActionCollectionModel implements ShoppingListSetDeleteDaysAfterLastModificationActionCollection
{

    /**
     * @param ShoppingListSetDeleteDaysAfterLastModificationAction $value
     * @return ShoppingListSetDeleteDaysAfterLastModificationActionCollection
     */
    public function add($value) {
        if (!$value instanceof ShoppingListSetDeleteDaysAfterLastModificationAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShoppingListSetDeleteDaysAfterLastModificationAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShoppingListSetDeleteDaysAfterLastModificationAction) {
            $data = $this->mapData(ShoppingListSetDeleteDaysAfterLastModificationAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
