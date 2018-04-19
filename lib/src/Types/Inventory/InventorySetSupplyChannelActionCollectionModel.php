<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Types\Inventory\InventoryEntryUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class InventorySetSupplyChannelActionCollectionModel extends InventoryEntryUpdateActionCollectionModel implements InventorySetSupplyChannelActionCollection
{

    /**
     * @param InventorySetSupplyChannelAction $value
     * @return InventorySetSupplyChannelActionCollection
     */
    public function add($value) {
        if (!$value instanceof InventorySetSupplyChannelAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return InventorySetSupplyChannelAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof InventorySetSupplyChannelAction) {
            $data = $this->mapData(InventorySetSupplyChannelAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
