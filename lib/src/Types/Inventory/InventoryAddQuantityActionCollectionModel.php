<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Types\Inventory\InventoryEntryUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class InventoryAddQuantityActionCollectionModel extends InventoryEntryUpdateActionCollectionModel implements InventoryAddQuantityActionCollection {

    /**
     * @param InventoryAddQuantityAction $value
     * @return InventoryAddQuantityActionCollection
     */
    public function add($value) {
        if (!$value instanceof InventoryAddQuantityAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return InventoryAddQuantityAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof InventoryAddQuantityAction) {
            $data = $this->mapData(InventoryAddQuantityAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
