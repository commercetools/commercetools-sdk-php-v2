<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class InventoryEntryDeletedMessageCollectionModel extends MessageCollectionModel implements InventoryEntryDeletedMessageCollection
{

    /**
     * @param InventoryEntryDeletedMessage $value
     * @return InventoryEntryDeletedMessageCollection
     */
    public function add($value) {
        if (!$value instanceof InventoryEntryDeletedMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return InventoryEntryDeletedMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof InventoryEntryDeletedMessage) {
            $data = $this->mapData(InventoryEntryDeletedMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
