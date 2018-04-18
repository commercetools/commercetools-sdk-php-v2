<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Types\Inventory\InventoryEntryUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class InventorySetCustomFieldActionCollectionModel extends InventoryEntryUpdateActionCollectionModel implements InventorySetCustomFieldActionCollection {

    /**
     * @param InventorySetCustomFieldAction $value
     * @return InventorySetCustomFieldActionCollection
     */
    public function add($value) {
        if (!$value instanceof InventorySetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return InventorySetCustomFieldAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof InventorySetCustomFieldAction) {
            $data = $this->mapData(InventorySetCustomFieldAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
