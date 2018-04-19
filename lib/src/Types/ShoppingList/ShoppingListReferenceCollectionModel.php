<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\Common\ReferenceCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ShoppingListReferenceCollectionModel extends ReferenceCollectionModel implements ShoppingListReferenceCollection
{

    /**
     * @param ShoppingListReference $value
     * @return ShoppingListReferenceCollection
     */
    public function add($value) {
        if (!$value instanceof ShoppingListReference) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShoppingListReference
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShoppingListReference) {
            $data = $this->mapData(ShoppingListReference::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
