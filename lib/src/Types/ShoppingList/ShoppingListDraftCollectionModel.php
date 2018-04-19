<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ShoppingListDraftCollectionModel extends JsonCollection implements ShoppingListDraftCollection
{

    /**
     * @param ShoppingListDraft $value
     * @return ShoppingListDraftCollection
     */
    public function add($value) {
        if (!$value instanceof ShoppingListDraft) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShoppingListDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShoppingListDraft) {
            $data = $this->mapData(ShoppingListDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
