<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Types\Inventory\InventoryEntryUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class InventoryRemoveQuantityActionCollectionModel extends InventoryEntryUpdateActionCollectionModel implements InventoryRemoveQuantityActionCollection {

    /**
     * @param InventoryRemoveQuantityAction $value
     * @return InventoryRemoveQuantityActionCollection
     */
    public function add($value) {
        if (!$value instanceof InventoryRemoveQuantityAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return InventoryRemoveQuantityAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof InventoryRemoveQuantityAction) {
            $data = $this->mapData(InventoryRemoveQuantityAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
