<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Common\ReferenceModel;

use Commercetools\Types\Common\Reference;

class InventoryEntryReferenceModel extends ReferenceModel implements InventoryEntryReference
{
    const DISCRIMINATOR_VALUE = 'inventory-entry';

    /**
     * @var InventoryEntry
     */
    protected $obj;

    /**
     * @return InventoryEntry
     */
    public function getObj()
    {
        if (is_null($this->obj)) {
            $value = $this->raw(InventoryEntryReference::FIELD_OBJ);
            if (is_null($value)) {
                return $this->mapData(InventoryEntry::class, null);
            }
            $value = $this->mapData(InventoryEntry::class, $value);

            $this->obj = $value;
        }
        return $this->obj;
    }

    /**
     * @param InventoryEntry $obj
     * @return $this
     */
    public function setObj(InventoryEntry $obj)
    {
        $this->obj = $obj;

        return $this;
    }

}
