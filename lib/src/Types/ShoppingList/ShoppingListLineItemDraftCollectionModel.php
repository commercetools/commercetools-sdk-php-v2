<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ShoppingListLineItemDraftCollectionModel extends JsonCollection implements ShoppingListLineItemDraftCollection {

    /**
     * @param ShoppingListLineItemDraft $value
     * @return ShoppingListLineItemDraftCollection
     */
    public function add($value) {
        if (!$value instanceof ShoppingListLineItemDraft) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShoppingListLineItemDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShoppingListLineItemDraft) {
            $data = $this->mapData(ShoppingListLineItemDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
