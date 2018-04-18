<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Types\Inventory\InventoryEntryUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class InventorySetExpectedDeliveryActionCollectionModel extends InventoryEntryUpdateActionCollectionModel implements InventorySetExpectedDeliveryActionCollection {

    /**
     * @param InventorySetExpectedDeliveryAction $value
     * @return InventorySetExpectedDeliveryActionCollection
     */
    public function add($value) {
        if (!$value instanceof InventorySetExpectedDeliveryAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return InventorySetExpectedDeliveryAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof InventorySetExpectedDeliveryAction) {
            $data = $this->mapData(InventorySetExpectedDeliveryAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
