<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Types\Common\ReferenceCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class InventoryEntryReferenceCollectionModel extends ReferenceCollectionModel implements InventoryEntryReferenceCollection {

    /**
     * @param InventoryEntryReference $value
     * @return InventoryEntryReferenceCollection
     */
    public function add($value) {
        if (!$value instanceof InventoryEntryReference) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return InventoryEntryReference
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof InventoryEntryReference) {
            $data = $this->mapData(InventoryEntryReference::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
