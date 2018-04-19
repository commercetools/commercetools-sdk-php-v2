<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Types\Inventory\InventoryEntryUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class InventorySetCustomTypeActionCollectionModel extends InventoryEntryUpdateActionCollectionModel implements InventorySetCustomTypeActionCollection
{

    /**
     * @param InventorySetCustomTypeAction $value
     * @return InventorySetCustomTypeActionCollection
     */
    public function add($value) {
        if (!$value instanceof InventorySetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return InventorySetCustomTypeAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof InventorySetCustomTypeAction) {
            $data = $this->mapData(InventorySetCustomTypeAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
