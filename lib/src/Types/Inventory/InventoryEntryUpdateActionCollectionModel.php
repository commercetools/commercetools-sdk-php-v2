<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Base\JsonCollection;

class InventoryEntryUpdateActionCollectionModel extends JsonCollection implements InventoryEntryUpdateActionCollection {

    /**
     * @param InventoryEntryUpdateAction $value
     * @return InventoryEntryUpdateActionCollection
     */
    public function add($value) {
        if (!$value instanceof InventoryEntryUpdateAction) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return InventoryEntryUpdateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof InventoryEntryUpdateAction) {
            $resolvedClass = $this->resolveDiscriminator(InventoryEntryUpdateAction::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
