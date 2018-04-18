<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\UpdateCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ShoppingListUpdateCollectionModel extends UpdateCollectionModel implements ShoppingListUpdateCollection {

    /**
     * @param ShoppingListUpdate $value
     * @return ShoppingListUpdateCollection
     */
    public function add($value) {
        if (!$value instanceof ShoppingListUpdate) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShoppingListUpdate
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShoppingListUpdate) {
            $data = $this->mapData(ShoppingListUpdate::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
