<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Types\UpdateCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class InventoryEntryUpdateCollectionModel extends UpdateCollectionModel implements InventoryEntryUpdateCollection {

    /**
     * @param InventoryEntryUpdate $value
     * @return InventoryEntryUpdateCollection
     */
    public function add($value) {
        if (!$value instanceof InventoryEntryUpdate) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return InventoryEntryUpdate
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof InventoryEntryUpdate) {
            $data = $this->mapData(InventoryEntryUpdate::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
