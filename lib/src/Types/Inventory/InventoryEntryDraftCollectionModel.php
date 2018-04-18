<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class InventoryEntryDraftCollectionModel extends JsonCollection implements InventoryEntryDraftCollection {

    /**
     * @param InventoryEntryDraft $value
     * @return InventoryEntryDraftCollection
     */
    public function add($value) {
        if (!$value instanceof InventoryEntryDraft) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return InventoryEntryDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof InventoryEntryDraft) {
            $data = $this->mapData(InventoryEntryDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
