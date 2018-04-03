<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ShoppingListLineItemCollectionModel extends JsonCollection implements ShoppingListLineItemCollection {

    /**
     * @param ShoppingListLineItem $value
     * @return ShoppingListLineItemCollection
     */
    public function add($value) {
        if (!$value instanceof ShoppingListLineItem) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShoppingListLineItem
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShoppingListLineItem) {
            $data = $this->mapData(ShoppingListLineItem::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
