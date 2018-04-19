<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Types\PagedQueryResponseCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class InventoryPagedQueryResponseCollectionModel extends PagedQueryResponseCollectionModel implements InventoryPagedQueryResponseCollection
{

    /**
     * @param InventoryPagedQueryResponse $value
     * @return InventoryPagedQueryResponseCollection
     */
    public function add($value) {
        if (!$value instanceof InventoryPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return InventoryPagedQueryResponse
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof InventoryPagedQueryResponse) {
            $data = $this->mapData(InventoryPagedQueryResponse::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
