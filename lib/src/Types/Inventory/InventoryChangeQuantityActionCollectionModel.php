<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Types\Inventory\InventoryEntryUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class InventoryChangeQuantityActionCollectionModel extends InventoryEntryUpdateActionCollectionModel implements InventoryChangeQuantityActionCollection
{

    /**
     * @param InventoryChangeQuantityAction $value
     * @return InventoryChangeQuantityActionCollection
     */
    public function add($value) {
        if (!$value instanceof InventoryChangeQuantityAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return InventoryChangeQuantityAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof InventoryChangeQuantityAction) {
            $data = $this->mapData(InventoryChangeQuantityAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
