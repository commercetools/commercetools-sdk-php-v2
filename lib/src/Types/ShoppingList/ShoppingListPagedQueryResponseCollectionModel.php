<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\PagedQueryResponseCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ShoppingListPagedQueryResponseCollectionModel extends PagedQueryResponseCollectionModel implements ShoppingListPagedQueryResponseCollection {

    /**
     * @param ShoppingListPagedQueryResponse $value
     * @return ShoppingListPagedQueryResponseCollection
     */
    public function add($value) {
        if (!$value instanceof ShoppingListPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShoppingListPagedQueryResponse
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShoppingListPagedQueryResponse) {
            $data = $this->mapData(ShoppingListPagedQueryResponse::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
