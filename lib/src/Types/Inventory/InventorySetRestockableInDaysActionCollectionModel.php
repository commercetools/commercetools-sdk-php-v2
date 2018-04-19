<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Types\Inventory\InventoryEntryUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class InventorySetRestockableInDaysActionCollectionModel extends InventoryEntryUpdateActionCollectionModel implements InventorySetRestockableInDaysActionCollection
{

    /**
     * @param InventorySetRestockableInDaysAction $value
     * @return InventorySetRestockableInDaysActionCollection
     */
    public function add($value) {
        if (!$value instanceof InventorySetRestockableInDaysAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return InventorySetRestockableInDaysAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof InventorySetRestockableInDaysAction) {
            $data = $this->mapData(InventorySetRestockableInDaysAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
