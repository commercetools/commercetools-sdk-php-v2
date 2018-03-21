<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Base\JsonCollection;

class InventoryEntryCollectionModel extends JsonCollection implements InventoryEntryCollection {

    /**
     * @param InventoryEntry $value
     * @return InventoryEntryCollection
     */
    public function add($value) {
        if (!$value instanceof InventoryEntry) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return InventoryEntry
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof InventoryEntry) {
            $data = $this->mapData(InventoryEntry::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }

    protected function index($data)
    {
        foreach ($data as $key => $value) {
            if (isset($value['id'])) {
                $this->addToIndex('id', $value['id'], $key);
            }
        }
    }

    /**
     * @return string
     */
    public function byId($id)
    {
        return $this->valueByKey('id', $id);
    }
}
